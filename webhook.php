<?php
    // Debug: Log all incoming GET parameters
    error_log('GET Parameters: ' . json_encode($_GET));
    
    // Your verification token
    $verify_token = 'my_secure_token_123';
    $accessToken = 'EAATriRmScZB4BO2FMmlUM7yLfZCVfbBecmzFryaXe6IkkFb5QgCjchfUWXtudVCEmmEgkaBWoRJ6ZB98tWnOVfVUWmpxtYLCquLYYEFWasK1o3vpyBrqtx9QBOGCZCztM1ZBs4pZBO1WzafwB8VrGtjTAmv9hIjRF6pAB39CZBfjavrn6siZCjFl6JZBzGDfo22fMxk1fSEtMscvW8zfS';
    
    // Access query parameters with dots
    $hub_verify_token = isset($_GET['hub_verify_token']) ? $_GET['hub_verify_token'] : null;
    $hub_challenge = isset($_GET['hub_challenge']) ? $_GET['hub_challenge'] : null;
    
    // Log received values
    error_log('Received verify_token: ' . var_export($hub_verify_token, true));
    error_log('Challenge: ' . var_export($hub_challenge, true));
    
    // Verify the token and respond with the challenge
    if ($hub_verify_token === $verify_token) {
        echo $hub_challenge;
    } else {
        echo 'Invalid verification';
    }
    // Process Incoming Messages
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);
    file_put_contents('notifications.txt', "Webhook received at " . date("Y-m-d H:i:s") . "\n", FILE_APPEND);
    file_put_contents('notifications.txt', "Received Data: " . print_r($input, true) . "\n\n", FILE_APPEND);

    if (isset($input['entry'])) {
        foreach ($input['entry'] as $entry) {
            foreach ($entry['messaging'] as $message) {
                $senderId = $message['sender']['id'];
                $recipientId = $message['recipient']['id'];
                $messageText = $message['message']['text'];
                sendMessage($senderId, "Thank you for your message: '$messageText'");
            }
        }
    }

    http_response_code(200);
    exit;
}

// Function to send a reply message
function sendMessage($recipientId, $messageText) {
    global $accessToken;
    
    // Prepare the data to send the message
    $url = "https://graph.facebook.com/v12.0/me/messages?access_token=" . $accessToken;
    $data = [
        'recipient' => ['id' => $recipientId],
        'message' => ['text' => $messageText]
    ];

    // Send the request to the Facebook Graph API
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    $response = curl_exec($ch);
    curl_close($ch);

    // Log the response for debugging
    file_put_contents('notifications.txt', "Sent Response: " . $response . "\n\n", FILE_APPEND);
}
?>
