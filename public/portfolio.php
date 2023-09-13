<?php

    // import the init page
    require('../db/init.php');

    // declare a variable that executes the find_all function on the Note class
    $artifacts = Artifact::find_all();

?><!DOCTYPE html>
<html lang="en" data-barba="wrapper">

    <?php
        $title = "My Portfolio";
        $description = "These projects highlight my aptitudes in web development, web design, UI/UX design, 3D graphics and more.";
        $stylesheet = "styles/portfolio.css";
        require('partials/global/head.php'); 
    ?>

    <body>

        <?php require('partials/global/header.php'); ?>
        <?php require('partials/global/background.php'); ?>

        <main id="overflow-container">
            <div id="page-container" data-barba="container" data-barba-namespace="portfolio">
                <div class="full-width">
                    <div class="disc-section__title">
                        <div class="title-container">
                            <h1>My Projects</h1>
                        </div>
                    </div>
                    <div class="disc-card__container flex js-allcards">
                        <div class="card-wrap flex">

                            <?php while($artifact = $artifacts->fetch_assoc()) {   
                                    include(get_path('public/partials/global/card.php'));
                                } ?>

                            <div class="card flex flex-column blur height-mobile">
                                <div class="card__coming-soon-img">
                                    <img src="images/radio.png" alt="a drawing of a radio" width="320" height="224">
                                </div>
                                <div class="card__coming-soon-msg">
                                    <h2>Stay Tuned!</h2>
                                    <p>More Projects Coming Soon!</p>
                                </div>
                                <div class="card__cta flex"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer id="footer">

                    <?php require('partials/global/footer.php'); ?>

                </footer>
            </div>
        </main> 

        <?php require('partials/global/scripts.php'); ?>

    </body>
</html>