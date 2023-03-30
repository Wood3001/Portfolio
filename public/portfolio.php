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

        <main>
            <div class="overflow-container" data-barba="container" data-barba-namespace="portfolio">
                <div id="page-container">
                    <div class="full-width">
                        <div class="disc-section__title">
                            <div class="title-container">
                            <div class="breadcrumb-container flex flex-row">
                                <p class="breadcrumb_arrow">Filter by:&nbsp</p>
                                <a class="breadcrumb" href="../../../public/development.php" aria-label="See Development Projects">Development</a>&nbsp &nbsp
                                <a class="breadcrumb" href="../../../public/design.php" aria-label="See Design Projects">Design</a>
                            </div>
                                <h1>My Projects</h1>
                            </div>
                        </div>
                        <div class="disc-card__container flex js-allcards">
                            <div class="card-wrap flex">

                                <?php while($artifact = $artifacts->fetch_assoc()) {   
                                        include(get_path('public/partials/global/card.php'));
                                    } ?>

                                <div class="card flex flex-column blur height-mobile">
                                    <div class="card__image"></div>
                                    <div class="card__message">
                                        <h3>Stay Tuned!</h3>
                                        <h2>More Projects Coming Soon!</h2>
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
            </div>
            <div class="blackout"></div>
        </main> 

        <?php require('partials/global/scripts.php'); ?>

    </body>
</html>