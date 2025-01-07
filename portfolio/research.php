<?php
include 'header.php';
?>
<!-- main-area -->
<main>
    <!-- breadcrumb-area -->
    <section class="breadcrumb__wrap">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="breadcrumb__wrap__content">
                        <h2 class="title">RESEARCH</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">About Me</a></li>
                                <li class="breadcrumb-item active" aria-current="page">RESEARCH I've done</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- breadcrumb-area-end -->
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-10">
        <div id="pl-49" class="panel-layout">
            <div id="pg-49-0" class="panel-grid panel-no-style">
                <div id="pgc-49-0-0" class="panel-grid-cell">

                    </div>
                    <div id="panel-49-0-0-2" class="so-panel widget widget_pulse_title" data-index="2">
                        <span class="content-title">RESEARCH PROJECTS</span>
                    </div>
                    <div id="panel-49-0-0-3" class="so-panel widget widget_pulse_research_projects panel-last-child" data-index="3">
                        <div class="slide-wrapper slide_wrapperwidget-0-0-3">
                            <div class="slider-details">
                                <span class="slide-counter">1 / 4</span>
                                <span class="slide-date"><span class="research-date-label"><i class="fa fa-calendar"></i></span>Research Date : 2016</span>
                            </div>
                            <div class="slide active">
                                <div class="slide-header">
                                    <h3>Automatic Vehicle System</h3>
                                    <h4>Automatic Vehicle System Interfaced Through Parallel port UsingC/C++.</h4>
                                </div>
                                <div class="slide-content">
                                    <b>
                                            <ul>
                                                <li>Automatic vehicle system interfaced through parallel printer port, accepted in the journal of applied science & technology, Islamic University, Kushtia.</li>
                                                <li>Emerging cyber threats in Bangladesh: in quest of effective legal remedies, the northern university journal of law, volume-i (2010)
                                                </li>
                                                <li>Articulatory feature-based Gender Factor Minimization in Automatic Speech Recognition, conference paper, ICIEV, 2013
                                                </li>
                                            </ul>
                                    </b>
                                </div>
                                
                            </div>
                        </div>
                        <script>
                            jQuery(document).ready(function($) {


                                // Variables
                                var currentSlide = 1,
                                    currentDate = $('.slide_wrapperwidget-0-0-3 .active').data("date"),
                                    slideName = $('.slide_wrapperwidget-0-0-3 div.slide'),
                                    totalSlides = slideName.length,
                                    slideCounter = $('.slide_wrapperwidget-0-0-3 .slide-counter'),
                                    sliderDate = $('.slide_wrapperwidget-0-0-3 .slide-date'),
                                    btnNext = $('.slide_wrapperwidget-0-0-3 a#btn-next'),
                                    btnPrev = $('.slide_wrapperwidget-0-0-3 a#btn-prev'),
                                    addSlide = $('.slide_wrapperwidget-0-0-3 a#add-slide');

                                slideCounter.text(currentSlide + ' / ' + totalSlides);
                                sliderDate.html('<span class="research-date-label"><i class="fa fa-calendar"></i></span>' + currentDate);
                                // Slide Transitions
                                function btnTransition(button, direction) {
                                    $(button).on('click', function() {

                                        if (button === btnNext && currentSlide >= totalSlides) {
                                            currentSlide = 1;
                                        } else if (button === btnPrev && currentSlide === 1) {
                                            currentSlide = totalSlides;
                                        } else {
                                            direction();
                                        };
                                        currentDate = $(slideName).eq(currentSlide - 1).data("date");
                                        slideName.filter('.active').animate({
                                            opacity: 0,
                                            left: -40
                                        }, 400, function() {
                                            $(this)
                                                .removeClass('active')
                                                .css('left', 0);
                                            $(slideName)
                                                .eq(currentSlide - 1)
                                                .css({
                                                    'opacity': 0,
                                                    'left': 40
                                                })
                                                .addClass('active')
                                                .animate({
                                                    opacity: 1,
                                                    left: 0
                                                }, 400);
                                        });

                                        slideCounter.text(currentSlide + ' / ' + totalSlides);
                                        sliderDate.html('<span class="research-date-label"><i class="fa fa-calendar"></i></span>' + currentDate);
                                    });
                                };
                                // Slide forward
                                btnTransition(btnNext, function() {
                                    currentSlide++;
                                });
                                // Slide Backwards
                                btnTransition(btnPrev, function() {
                                    currentSlide--;
                                });
                            });
                        </script>


                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>
</main>

<?php

include 'footer.php';
?>