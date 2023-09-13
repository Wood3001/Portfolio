<?php

    // import the init page
    require('../db/init.php');

    // declare a variable that executes the find_all function on the Note class
    $artifacts = Artifact::find_all();

    $count = 0;

?><!DOCTYPE html>
<html lang="en" data-barba="wrapper">
    
    <?php 
        $title = "Web Developer & Designer";
        $description = "I am a Web Developer and New Media Designer from Vancouver, British Columbia, Canada. I am a student at BCIT, soon entering the workforce!";
        $stylesheet = "styles/partials/home.css";
        require('partials/global/head.php');
    ?>

    <body>

            <?php require('partials/global/header.php'); ?>
            <?php require('partials/global/background.php'); ?>
        
        <main>
            <div id="overflow-container" data-barba="container" data-barba-namespace="home">
                <div id="page-container">
                    <div class="full-width">
                        <section class="sec-1 flex">
                            <div class="home-banner">
                                <div class="home-banner__logo flex">
                                    <img  src="images/logo.svg" alt="My S logo" width="48" height="54">
                                </div>
                                <div class="home-banner__message">
                                    <div class="flex flex-column flex-middle">
                                        <h1>Sherwood Seabrook</h1>
                                        <h2>Front End Developer</h2>
                                    </div>
                                </div>
                                <div class="home-banner__profile-picture flex">
                                    <img src="images/portrait01.jpg" alt="A picture of me" width="400" height="400">
                                </div>
                                <div class="home-banner__cta flex">
                                    <a href="<?php echo get_public_url('/portfolio.php'); ?>"><button class="btn-1" aria-label="View My Work"><h3>View My Work</h3></button></a>
                                </div>
                            </div>
                            <div class="home-banner__arrow">
                                <a href="#sec-2"><div class="down-arrow"></div></a>
                            </div>
                        </section>
                        <section class="sec-2" id="sec-2">
                            <div class="home-intro__message blur">
                                <h2>Hello, my name is <br>
                                <span class="bigger my-name">Sherwood.</span></h2>
                                <img src="images/fam-pic1.jpg" alt="a picture of me with my partner and daughter">
                                <div class="home-intro__text-box">
                                    <p>I am a Front End Developer based in Vancouver, Canada. I am a graduate-with-distincton of <a href="https://www.bcit.ca/programs/new-media-design-and-web-development-diploma-full-time-6525dipma/" target="_blank">New Media Design & Web Development</a> at British Columbia Institute of Technology (BCIT). Presently I am seeking a full-time Junior Developer position. I am excited to continue learning and practising my skills in a professional environment!</p>
                                </div>
                                <div class="home-banner__cta">
                                    <a href="<?php echo get_public_url('/about.php'); ?>"><button class="btn-1" aria-label="More About Me"><h3>More About Me</h3></button></a>
                                </div>
                            </div>
                            <div class="home-banner__arrow">
                                <a href="#sec-3"><div class="down-arrow"></div></a>
                            </div>
                        </section>
                        <section class="sec-3" id="sec-3">
                            <div class="home-card__heading home-card__wrapper flex flex-column flex-end">
                                <h2>Featured Projects</h2>
                            </div>
                            <div class="home-card__container flex flex-middle">

                                <?php while($count < 3 && $artifact = $artifacts->fetch_assoc()) {
                                    include(get_path('public/partials/global/home-card.php'));
                                    $count++;
                                } ?>

                            </div>
                        </section>
                    </div>
                    <footer id="footer">

                        <?php require('partials/global/footer.php'); ?>

                    </footer>
                </div>
            </div>
        </main>

        <?php require('partials/global/scripts.php'); ?>

    </body>
</html>