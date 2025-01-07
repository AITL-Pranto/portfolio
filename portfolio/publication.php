<?php require 'header.php' ?>

<!-- main-area -->
<main>

    <!-- breadcrumb-area -->
    <section class="breadcrumb__wrap">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="breadcrumb__wrap__content">
                        <h2 class="title">My Publications</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">About</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Publications</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- Section Publication -->
    <section class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="hs-inner">
                    <h2 class="mainpage_title">PUBLICATIONS</h2>
                    <div id="pl-17" class="panel-layout">
                        <div id="pg-17-0" class="panel-grid panel-no-style">
                            <div id="pgc-17-0-0" class="panel-grid-cell">
                                <div id="panel-17-0-0-0" class="so-panel widget widget_pulse_title panel-first-child panel-last-child" data-index="0">
                                    <span class="content-title">PUBLICATIONS LIST</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row publication-form">
                        <div class="col-md-6 publication-filter">
                            <div class="card-drop">
                                <a class="toggle">
                                    <i class="icon-suitcase"></i>
                                    <span class="label-active">ALL</span>
                                </a>
                                <ul id="filter">
                                    <li class="active closed" style="z-index: 7; top: 0px; width: 276.5px; margin-left: 0px;"><a data-label="ALL" data-group="all" style="box-shadow: none;">ALL</a></li>
                                    <li class="closed" style="z-index: 6; top: 0px; width: 276.5px; margin-left: 1px;"><a data-label="Book" data-group="Book" style="box-shadow: none;">Book</a></li>
                                    <li class="closed" style="z-index: 5; top: 0px; width: 276.5px; margin-left: 2px;"><a data-label="Book Chapters" data-group="Book Chapters" style="box-shadow: none;">Book Chapters</a></li>
                                    <li class="closed" style="z-index: 4; top: 0px; width: 276.5px; margin-left: 3px;"><a data-label="Book Series" data-group="Book Series" style="box-shadow: none;">Book Series</a></li>
                                    <li class="closed" style="z-index: 3; top: 0px; width: 276.5px; margin-left: 4px;"><a data-label="Conferences" data-group="Conferences" style="box-shadow: none;">Conferences</a></li>
                                    <li class="closed" style="z-index: 2; top: 0px; width: 276.5px; margin-left: 5px;"><a data-label="Journal Paper" data-group="Journal Paper" style="box-shadow: none;">Journal Paper</a></li>
                                    <li class="closed" style="z-index: 1; top: 0px; width: 276.5px; margin-left: 6px;"><a data-label="Thesis" data-group="Thesis" style="box-shadow: none;">Thesis</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 publication-sort">
                            <div class="sorting-button">
                                <span>SORTING BY DATE</span> <button class="desc"><i class="fa fa-sort-numeric-desc"></i>
                                </button>
                                <button class="asc"><i class="fa fa-sort-numeric-asc"></i>
                                </button>
                            </div>


                        </div>
                    </div>
                    <div id="mygrid" class="shuffle" style=" transition: height 500ms ease-out 0s;">

                        <?php
                        $sql = "SELECT * FROM `publications` WHERE `person_id` =1";
                        $results = mysqli_query($conn, $sql);
                        $results = mysqli_fetch_all($results, MYSQLI_ASSOC);
                        for ($i = 0; $i < count($results); $i++) {
                        ?>
                            <div class="publication_item" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); opacity: 1; transition: transform 500ms ease-out 0s, opacity 500ms ease-out 0s;">
                                <div class="media">
                                    <a href=".publication379" class="ex-link open_popup" data-effect="mfp-zoom-out"><i class="fa fa-plus-square-o"></i></a>
                                    <div class="date pull-left">
                                        <span class="day"><?php echo $results[$i]['day']; ?></span>
                                        <span class="month"><?php echo $results[$i]['month']; ?></span>
                                        <span class="year"><?php echo $results[$i]['year']; ?></span>
                                    </div>
                                    <div class="media-body">
                                        <h3><?php echo $results[$i]['title']; ?> </h3>
                                        <h4><?php echo $results[$i]['location']; ?></h4>
                                        <span class="publication_description"><?php echo $results[$i]['description']; ?></span>
                                    </div>
                                    <hr style="margin:8px auto">
                                    <span class="label label-pub"><?php echo $results[$i]['type']; ?></span>
                                    <?php if ($results[$i]['is_selected']) { ?>
                                        <span class="label selected">Selected</span><?php } ?>
                                    <span class="publication_authors"><?php echo $results[$i]['publishers']; ?></span>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>


            </div>
        </div>
        </div>
    </section>

    <?php require "footer.php" ?>