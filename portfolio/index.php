<?php require 'header.php' ?>
<?php

?>
<!-- main-area -->
<main>

    <!-- breadcrumb-area -->
    <section class="breadcrumb__wrap">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="breadcrumb__wrap__content">
                        <h2 class="title">About Me</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About ME</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- breadcrumb-area-end -->

    <!-- about-area -->
    <section class="about about__style__two">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about__info__wrap">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="about-tab" data-bs-toggle="tab" data-bs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="true">About</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="skills-tab" data-bs-toggle="tab" data-bs-target="#skills" type="button" role="tab" aria-controls="skills" aria-selected="false">Skills</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="education-tab" data-bs-toggle="tab" data-bs-target="#education" type="button" role="tab" aria-controls="education" aria-selected="false">RESUME</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="about-tab">
                                <div class="row align-items-center">
                                    <div class="col-lg-4">
                                        <div class="about__image">
                                            <img src="assets/img/images/about_img2.jpg"alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-8 jspContainer">
                                        <div class="about__content">
                                            <h2 class="mainpage_title">ABOUT</h2>
                                            <div class="about__exp">
                                                <span class="content-title">PERSONAL DETAILS</span>
                                            </div>
                                            <div class="about-card">
                                                <div class="face2 card-face">
                                                    <div id="cd-google-map">
                                                        <div id="google-container"></div>
                                                        <div id="cd-zoom-in"></div>
                                                        <div id="cd-zoom-out"></div>
                                                        <address>Vill:Kashimary ,P.O: Kashimary P.S:Shyamnagore<br> Dist: Satkhira Bangladesh</address>
                                                        <div class="back-cover" data-card-back="data-card-back"><i class="fa fa-long-arrow-left"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="face1 card-face">
                                                    <div class="about-cover card-face">
                                                        
                                                        <div class="about-details">
                                                            <div><span class="fa fa-inbox"></span><span class="detail">rabinub@gmail.com</span>
                                                            </div>
                                                            <div><span class="fa fa-phone"></span><span class="detail">+8801718-860019</span>
                                                            </div>
                                                        </div>

                                                        <div class="cover-content-wrapper">
                                                            <span class="about-description">Teacher, Researcher</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="verticaltab">


                                                <ul class="nav nav-tabs nav-tabs-left nav-centered" style="display:flex; flex-direction:column;" role="tablist">
                                                    <li role="presentation" class="">
                                                        <a href="#BIOGRAPHY" data-toggle="tab" role="tab">
                                                            <i class="fa-solid fa-user"></i>
                                                        </a>
                                                    </li>
                                                    <li role="presentation" class="">
                                                        <a href="#HOBBIES" data-toggle="tab" role="tab">
                                                            <i class="fa-solid fa-heart"></i>
                                                        </a>
                                                    </li>
                                                    <li role="presentation" class="">
                                                        <a href="#Activities" data-toggle="tab" role="tab">
                                                            <i class="fa-solid fa-chart-line"></i>
                                                        </a>
                                                    </li>
                                                    <li role="presentation" class="">
                                                        <a href="#Workshop_and_Seminars" data-toggle="tab" role="tab">
                                                            <i class="fa-solid fa-users"></i>
                                                        </a>
                                                    </li>
                                                    <li role="presentation" class="">
                                                        <a href="#Research_Profile_Links" data-toggle="tab" role="tab">
                                                            <i class="fa-solid fa-leaf"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <?php
                                                $sql = "SELECT * FROM `person` WHERE `id` =1";
                                                $bio = mysqli_query($conn, $sql);
                                                $bio = mysqli_fetch_all($bio, MYSQLI_ASSOC)[0];
                                                ?>
                                                <div id="my_side_tabs" class="tab-content side-tabs side-tabs-left">
                                                    <div class="tab-pane fade active show" id="BIOGRAPHY" role="tabpanel">
                                                        <h3 class="mytabtitle">BIOGRAPHY</h3>
                                                        <h4 class="mytabsubtitle">ABOUT ME</h4>
                                                        <div class="tabcon">
                                                            <p>
                                                                <b>
                                                                    <i> <?php echo $bio['name']; ?> </i>
                                                                    <?php echo $bio['bio']; ?>
                                                                </b>
                                                            </p>

                                                            <p>
                                                                <b>
                                                                    My Research Areas:
                                                                </b>
                                                            </p>
                                                            <ul><b>
                                                                    <?php
                                                                    $researches = explode(',', $bio['researches']);
                                                                    for ($j = 0; $j < count($researches); $j++) {
                                                                        echo "<li>$researches[$j]</li>";
                                                                    } ?>
                                                                </b></ul><b>
                                                            </b>
                                                            <p></p>
                                                        </div>

                                                    </div>
                                                    <div class="tab-pane fade active in" id="HOBBIES" role="tabpanel">
                                                        <h3 class="mytabtitle">HOBBIES</h3>
                                                        <h4 class="mytabsubtitle">INTERESTS</h4>
                                                        <div class="tabcon"><b>

                                                                <ul>
                                                                    <?php
                                                                    $hobbies = explode(',', $bio['hobbies']);
                                                                    for ($j = 0; $j < count($hobbies); $j++) {
                                                                        echo "<li>$hobbies[$j]</li>";
                                                                    } ?>
                                                                </ul>
                                                            </b></div>

                                                    </div>
                                                    <div class="tab-pane fade" id="Activities" role="tabpanel">
                                                        <h3 class="mytabtitle">CAREER OBJECTIVE</h3>
                                                        <h4 class="mytabsubtitle">MY Carrer Objective </h4>
                                                        <div class="tabcon"><b>

                                                                <!-- <ul>
                                                                    <li>2006: Participation in First Bangladesh Astro-Olympiad.</li>
                                                                    <li>2006: Participation in Divisional Mathematical Olympiad.</li>
                                                                    <li>2008: Participation in Third Bangladesh Astro-Olympiad.</li>
                                                                    <li>2011: Participation in GPIT Festival in KUET.</li>
                                                                    <li>2013: Participation in EATLAPPS Contest.</li>
                                                                    <li>2014: Participation in 3rd EESTEC Competition for Android and placed 20th in ﬁnal round.</li>
                                                                    <li>2014: Participation in imagine cup 2014 primarily round.</li>
                                                                    <li>2014: Participation in IUT 6th National ICT Fest.</li>
                                                                    <li>2015: Participation in 4th EESTEC Competition for Android.</li>

                                                                </ul> -->
                                                                <p>
                                                                    <?php echo $bio['carear_objective']; ?>
                                                                </p>
                                                            </b></div>

                                                    </div>
                                                    <div class="tab-pane fade" id="Workshop_and_Seminars" role="tabpanel">
                                                        <h3 class="mytabtitle">Workshop and Seminars</h3>
                                                        <h4 class="mytabsubtitle">Participation in Several Seminars</h4>
                                                        <div class="tabcon"><b>
                                                                <ul>
                                                                    <?php
                                                                    $workshop_n_seminars = explode('|', $bio['workshop_n_seminars']);
                                                                    for ($j = 0; $j < count($workshop_n_seminars); $j++) {
                                                                        echo "<li>$workshop_n_seminars[$j]</li>";
                                                                    } ?>
                                                                </ul>
                                                            </b></div>

                                                    </div>
                                                    
                                                </div>



                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="skills" role="tabpanel" aria-labelledby="skills-tab">
                                <div id="pl-57" class="panel-layout">
                                    <div id="pg-57-0" class="panel-grid panel-no-style">
                                        <div id="pgc-57-0-0" class="panel-grid-cell">
                                            <div id="panel-57-0-0-0" class="so-panel widget widget_pulse_title panel-first-child" data-index="0">
                                                <span class="content-title">Language SKIILLS</span>
                                            </div>

                                            <?php

                                            $sql = "SELECT * FROM `skills`";
                                            $results = mysqli_query($conn, $sql);
                                            $results = mysqli_fetch_all($results, MYSQLI_ASSOC);

                                            for ($i = 0; $i < count($results); $i++) {
                                                $result = $results[$i];
                                                echo '<br>';
                                                $newElement = '';
                                                $newElement .= "<div class='so-panel widget widget_pulse_skills'>";
                                                $newElement .= "<div class='skolls'>";
                                                $newElement .= "<span class='skilltitle'> {$result['main_topic']}&gt; </span>";
                                                $newElement .= "<span class='skill-description'>{$result['name']}</span>";
                                                $newElement .= '<div class="bar-main-container">';
                                                $newElement .= '<div class="wrap">';
                                                $newElement .= "<div class='bar-percentage' data-percentage='{$result['skill_level']}'>{$result['skill_level']}%</div>";
                                                $newElement .= "<span class='skill-detail'><i class='fa fa-bar-chart style='width: {$result['skill_level']}%;></i>LEVEL : {$result['level']}</span>";
                                                $newElement .= "<span class='skill-detail'><i class='fa fa-binoculars' style='width: {$result['skill_level']}%;''></i>EXPERIENCE : More than 5 Years</span>";
                                                $newElement .= '<div class="bar-container">';
                                                $newElement .= "<div class='bar' style='width: {$result['skill_level']}%'></div>";
                                                $newElement .= "</div>";
                                                $skills = explode(',', $result['fields']);
                                                for ($j = 0; $j < count($skills); $j++) {
                                                    $newElement .= "<span class='label labelsection'>$skills[$j]</span>";
                                                }

                                                $newElement .= '<div style="clear:both;"></div>';
                                                $newElement .= "</div>";
                                                $newElement .= "</div>";
                                                $newElement .= "</div></div>";
                                                echo $newElement;
                                            }
                                            ?>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="education" role="tabpanel" aria-labelledby="education-tab" style="overflow-y:visible;">
                                <div class="about__education__wrap">
                                    <div class="row">
                                        <div class="hs-inner"><span class="before-title"></span>
                                            <h2 class="mainpage_title">RESUME</h2>
                                            <div id="pl-15" class="panel-layout">
                                                <div id="pg-15-0" class="panel-grid panel-no-style">
                                                    <div id="pgc-15-0-0" class="panel-grid-cell">
                                                        <div id="panel-15-0-0-0" class="so-panel widget widget_pulse_title panel-first-child" data-index="0">
                                                            <span class="content-title">EDUCATION</span>
                                                        </div>
                                                        <div id="panel-15-0-0-1" class="so-panel widget widget_pulse_resume_sections" data-index="1">
                                                            <div class="resume-wrapper">
                                                                <ul class="resume">
                                                                    <?php
                                                                    $sql = "SELECT * FROM `education` WHERE `person_id` =1";
                                                                    $results = mysqli_query($conn, $sql);
                                                                    $results = mysqli_fetch_all($results, MYSQLI_ASSOC);
                                                                    for ($i = 0; $i < count($results); $i++) {
                                                                    ?>
                                                                        <li>
                                                                            <div class="resume-tag">
                                                                                <span class="fa fa-graduation-cap"></span>
                                                                                <div class="resume-date">
                                                                                    <span><?php echo $results[$i]['year']; ?></span>
                                                                                    <div class="separator"></div>
                                                                                    <span></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="timeline-item">
                                                                                <span class="timeline-location"><i class="fa fa-map-marker"></i>Khulna, Bangladesh</span>
                                                                                <h3 class="timeline-header"><?php echo $results[$i]['degree_name']; ?>
                                                                                </h3>
                                                                                <div class="timeline-body">
                                                                                    <h4> <?php echo $results[$i]['institution']; ?></h4>
                                                                                    <?php if ($results[$i]['link'] != '') { ?>
                                                                                        <span><b>Thesis Title: <i><?php echo $results[$i]['thesis_title']; ?></i><br></b>
                                                                                            <b>Abstract:</b>
                                                                                            <p>
                                                                                                <?php echo $results[$i]['abstract']; ?>.<br></p>

                                                                                            <b>Download Link : <?php echo $results[$i]['link']; ?></b>
                                                                                        </span>
                                                                                    <?php } else { ?>
                                                                                        <span>
                                                                                            <b>
                                                                                                <?php echo $results[$i]['abstract']; ?>
                                                                                            </b>
                                                                                        </span>
                                                                                    <?php } ?>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    <?php
                                                                    }
                                                                    ?>


                                                                </ul>
                                                            </div>


                                                        </div>
                                                        <div id="panel-15-0-0-2" class="so-panel widget widget_pulse_title" data-index="2">
                                                            <span class="content-title">ACADEMIC AND PROFESSIONAL EXPERIENCES</span>
                                                        </div>
                                                        <div id="panel-15-0-0-3" class="so-panel widget widget_pulse_resume_sections" data-index="3">
                                                            <div class="resume-wrapper">
                                                                <ul class="resume">
                                                                    <?php
                                                                    $sql = "SELECT * FROM `academic_and_professional` WHERE `person_id` =1";
                                                                    $results = mysqli_query($conn, $sql);
                                                                    $results = mysqli_fetch_all($results, MYSQLI_ASSOC);
                                                                    for ($i = 0; $i < count($results); $i++) {
                                                                    ?>
                                                                        <li>
                                                                            <div class="resume-tag">
                                                                                <span class="fa fa-university"></span>
                                                                                <div class="resume-date">
                                                                                    <span><?php echo $results[$i]['from_year']; ?></span>
                                                                                    <div class="separator"></div>
                                                                                    <span><?php echo $results[$i]['to_year']; ?></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="timeline-item">
                                                                                <span class="timeline-location"><i class="fa fa-map-marker"></i>
                                                                                    Khulna, Bangladesh
                                                                                </span>
                                                                                <h3 class="timeline-header"><?php echo $results[$i]['position']; ?></h3>
                                                                                <div class="timeline-body">
                                                                                    <h4><?php echo $results[$i]['place']; ?></h4>
                                                                                    <span><?php echo $results[$i]['description']; ?></span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    <?php
                                                                    }
                                                                    ?>

                                                                </ul>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- about-area-end -->


</main>
<!-- main-area-end -->


<?php require 'footer.php' ?>