<?php
require('../include/db.php');
// Get the user agent
$userAgent = $_SERVER['HTTP_USER_AGENT'];

// Create an associative array
$response = array(
  'user_agent' => $userAgent
);

// Encode the array as JSON
$jsonResponse = json_encode($response);

// Set the content type to JSON
header('Content-Type: application/json');

// Echo the JSON response
//echo $jsonResponse;
if(isset($jsonResponse)){
   $query = "INSERT INTO test (user_agent) VALUES('$jsonResponse')";

   $run = mysqli_query($db, $query);
   
    if ($run) {
        echo "User agent saved successfully. \n";
         echo $jsonResponse;
    }
}
?>