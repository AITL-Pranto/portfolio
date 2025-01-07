<?php
require('include/db.php');
$query = "SELECT * FROM home,section_control,social_media,about,contact,site_background,seo,cv";
$run = mysqli_query($db, $query);
$user_data = mysqli_fetch_array($run);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $user_data['page_title'] ?></title>
  <meta content="<?= $user_data['description'] ?>" name="description">
  <meta content="<?= $user_data['keywords'] ?>" name="keywords">

  <!-- Favicons -->
  <link href="images/<?= $user_data['siteicon'] ?>" rel="icon">
  <link href="images/<?= $user_data['siteicon'] ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Personal - v2.4.0
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    .typing-effect {
      position: relative;
      display: inline-block;
      white-space: nowrap;
      overflow: hidden;
      border-right: 2px solid #000;
      /* Cursor effect */
      animation: typing 6s steps(40) forwards, cursor 0.5s steps(1) forwards;
    }

    @keyframes typing {
      from {
        width: 0;
      }

      to {
        width: 100%;
      }
    }

    @keyframes cursor {

      from,
      to {
        border-color: transparent;
      }

      50% {
        border-color: #000;
      }
    }
  </style>
</head>

<body style="background:url('images/<?= $user_data['background_img'] ?>') top right no-repeat;background-size: cover;margin: 0;padding: 0;height: auto;">

  <!-- ======= Header ======= -->
  <header id="header" class="header-tops">
    <div class="container">

      <h1><a href="index.php" class="typing-effect"><?= $user_data['title'] ?></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
      <div>
        <h2 style="color:#FFFFFF !important;"><?= $user_data['subtitle'] ?></h2>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <?php
          if ($user_data['home_section']) {
          ?>
            <li class="active"><a href="#header">Home</a></li>
          <?php
          }
          if ($user_data['about_section']) {
          ?>
            <li><a href="#about">About</a></li>
          <?php
          }
          if ($user_data['resume_section']) {
          ?>
            <li><a href="#resume">Resume</a></li>
          <?php
          }

          if ($user_data['portfolio_section']) {
          ?>
            <li><a href="#portfolio">Portfolio</a></li>
          <?php
          }
          if ($user_data['contact_section']) {
          ?>
            <li><a href="#contact">Contact</a></li>
          <?php
          }
          ?>

        </ul>
      </nav><!-- .nav-menu -->
      <?php
      if ($user_data['showicons']) {
      ?>
        <div class="social-links">
          <?php if ($user_data['twitter'] != '') { ?>
            <a href="<?= $user_data['twitter'] ?>" class="twitter" target="_blank"><i class="icofont-twitter"></i></a>
          <?php
          }
          ?>

          <?php if ($user_data['facebook'] != '') { ?>
            <a href="<?= $user_data['facebook'] ?>" class="facebook" target="_blank"><i class="icofont-facebook"></i></a>

          <?php
          }
          if ($user_data['instagram'] != '') {
          ?>
            <a href="<?= $user_data['instagram'] ?>" class="instagram" target="_blank"><i class="icofont-github"></i></a>
          <?php
          }
          if ($user_data['skype'] != '') {
          ?>
            <a href="<?= $user_data['skype'] ?>" class="google-plus" target="_blank"><i class="icofont-skype"></i></a>
          <?php
          }
          if ($user_data['linkedin'] != '') {
          ?>
            <a href="<?= $user_data['linkedin'] ?>" class="linkedin" target="_blank"><i class="icofont-linkedin"></i></a>
          <?php
          }
          ?>
        </div>
      <?php
      }
      ?>


    </div>
  </header><!-- End Header -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

      <div class="section-title">
        <h2>About</h2>
        <p>Learn more about me</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="images/<?= $user_data['profile_pic'] ?>" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3><?= $user_data['about_title'] ?></h3>
          <p class="font-italic">
            <?= $user_data['about_subtitle'] ?>
          </p>
          <div class="row col-lg-12">
            <div class="col-lg-8">
              <ul>
                <?php
                $query2 = "SELECT * FROM personal_info";
                $run2 = mysqli_query($db, $query2);

                while ($personal_info = mysqli_fetch_array($run2)) {
                ?>
                  <li><i class="icofont-rounded-right"></i> <strong><?= $personal_info['label'] ?> :</strong> <?= $personal_info['value'] ?></li>
                <?php
                }
                ?>
              </ul>
            </div>

          </div>
          <p style="text-align: justify;">
            <?= $user_data['about_desc'] ?>
          </p>
        </div>
      </div>

    </div><!-- End About Me -->


    <!-- ======= Skills  ======= -->
    <div class="skills container">

      <div class="section-title">
        <h2>Skills</h2>
      </div>

      <div class="row skills-content">

        <div class="col-lg-12">
          <?php
          $query3 = "SELECT * FROM skills";
          $run3 = mysqli_query($db, $query3);

          while ($skill = mysqli_fetch_array($run3)) {
          ?>
            <div class="progress">
              <span class="skill"><?= $skill['skill_name'] ?> <i class="val"><?= $skill['skill_level'] ?>%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="<?= $skill['skill_level'] ?>" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          <?php
          }
          ?>
        </div>

      </div>

    </div><!-- End Skills -->





  </section><!-- End About Section -->

  <!-- ======= Resume Section ======= -->
  <section id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>Resume</h2>
        <p>Check My Resume</p>
        <?php
        $cvFileName = $user_data["cv_file"];
        $cvFilePath = "cv/" . $cvFileName;

        $isLocalhost = ($_SERVER['HTTP_HOST'] === 'localhost');

        if ($isLocalhost) {
          $baseURL = "http://localhost/resume/";
        } else {
          $baseURL = "https://prantosaha.com/";
        }

        // Generate the download link
        $downloadLink = $baseURL . $cvFilePath;
        ?>
        <small>Download Resume : <a href="<?php echo $downloadLink; ?>" target="_blank" rel="noopener noreferrer">Pranto Kumar Saha Resume</a></small>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3 class="resume-title">Education</h3>
          <?php
          $query4 = "SELECT * FROM resume";
          $run4 = mysqli_query($db, $query4);
          while ($resume = mysqli_fetch_array($run4)) {
            if ($resume['resume_type'] == 'e') {
          ?>
              <div class="resume-item">
                <h4><?= $resume['title'] ?></h4>
                <h5><?= $resume['resume_time'] ?></h5>
                <p><em><?= $resume['org'] ?></em></p>
                <p><?= $resume['about_exp'] ?></p>
                website: <a href="<?= $resume['official_website_link'] ?>" target="_blank" rel="noopener noreferrer"><?= $resume['org'] ?></a>
              </div>
          <?php
            }
          }
          ?>
        </div>
        <div class="col-lg-6">
          <h3 class="resume-title">Professional Experience</h3>


          <?php
          $query4 = "SELECT * FROM resume";
          $run4 = mysqli_query($db, $query4);
          while ($resume = mysqli_fetch_array($run4)) {
            if ($resume['resume_type'] == 'p') {
          ?>
              <div class="resume-item">
                <h4><?= $resume['title'] ?></h4>
                <h5><?= $resume['resume_time'] ?></h5>
                <p><em><?= $resume['org'] ?></em></p>
                <p><?= $resume['about_exp'] ?></p>
                website: <a href="<?= $resume['official_website_link'] ?>" target="_blank" rel="noopener noreferrer"><?= $resume['org'] ?></a>
              </div>
          <?php
            }
          }
          ?>

        </div>
      </div>

    </div>
  </section><!-- End Resume Section -->


  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <h2>Portfolio</h2>
        <p>My Works</p>
      </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">

        </div>
      </div>

      <div class="row portfolio-container">
        <?php
        $query5 = "SELECT * FROM portfolio";
        $run5 = mysqli_query($db, $query5);
        while ($portfolio = mysqli_fetch_array($run5)) {

        ?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="images/<?= $portfolio['project_pic'] ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><?= $portfolio['project_name'] ?></h4>
                <p><?= $portfolio['project_type'] ?></p>
                <div class="portfolio-links">
                  <a href="images/<?= $portfolio['project_pic'] ?>" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="<?= $portfolio['project_link'] ?>" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
        <?php
        }
        ?>



      </div>

    </div>
  </section><!-- End Portfolio Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Me</p>
      </div>

      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>My Address</h3>
            <p><?= $user_data['address'] ?></p>
          </div>
        </div>

        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Social Profiles</h3>
            <?php if ($user_data['twitter'] != '') { ?>
              <a href="<?= $user_data['twitter'] ?>" class="twitter"><i class="icofont-twitter"></i></a>
            <?php
            }
            ?>

            <?php if ($user_data['facebook'] != '') { ?>
              <a href="<?= $user_data['facebook'] ?>" class="facebook"><i class="icofont-facebook"></i></a>

            <?php
            }
            if ($user_data['instagram'] != '') {
            ?>
              <a href="<?= $user_data['instagram'] ?>" class="instagram"><i class="icofont-instagram"></i></a>
            <?php
            }
            if ($user_data['skype'] != '') {
            ?>
              <a href="<?= $user_data['skype'] ?>" class="google-plus"><i class="icofont-skype"></i></a>
            <?php
            }
            if ($user_data['linkedin'] != '') {
            ?>
              <a href="<?= $user_data['linkedin'] ?>" class="linkedin"><i class="icofont-linkedin"></i></a>
            <?php
            }
            ?>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email Me</h3>
            <p><?= $user_data['contact_email'] ?></p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Call Me</h3>
            <p><?= $user_data['contact_mobile'] ?></p>
          </div>
        </div>
      </div>



    </div>
  </section><!-- End Contact Section -->

  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/personal-free-resume-bootstrap-template/ -->
    Designed & Developed by <a href="javascript:void(0);">Pranto Kumar Saha</a>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!--   <script>
    const text = '<?= $user_data['subtitle'] ?>';

    const typingEffect = document.getElementById('typing-effect');

    let currentCharacter = 0;

    function typeText() {
      if (currentCharacter < text.length) {
        typingEffect.querySelector('h2').textContent += text[currentCharacter];
        currentCharacter++;
        setTimeout(typeText, 100); // Adjust the typing speed here (in milliseconds)
      }
    }

    typeText();
  </script> -->
</body>

</html>