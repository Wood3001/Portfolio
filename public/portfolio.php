<?php

    // import the init page
    require('../db/init.php');

    // declare a variable that executes the find_all function on the Note class
    $artifacts = Artifact::find_all();

?><!DOCTYPE html>
<html lang="en"  data-barba="wrapper">

    <?php
        $title = "My Portfolio";
        $description = "These projects highlight my aptitudes in web development, web design, UI/UX design, 3D graphics and more.";
        $stylesheet = "styles/portfolio.css";
        require('partials/global/head.php'); 
    ?>

        <body>

        <?php require('partials/global/header.php'); ?>

        <main>
            <div id="smooth-wrapper" class="overflow-container" data-barba="container" data-barba-namespace="portfolio">
                <div id="smooth-content">
                    <div class="disc-section__title flex">
                        <div class="title-container">
                            <div class="breadcrumb-container flex flex-row">
                                <p class="breadcrumb_arrow">Filter by:&nbsp</p>
                                <a class="breadcrumb" href="../../../public/development.php">Development</a>&nbsp &nbsp
                                <a class="breadcrumb" href="../../../public/design.php">Design</a>
                            </div>
                            <h1>My Projects</h1>
                        </div>
                    </div>
                    <div id="page-container">
                        <div id="content-wrap">
                            <div class="disc-card__container flex">

                                <?php while($artifact = $artifacts->fetch_assoc()) {   
                                        include(get_path('public/partials/global/card.php'));
                                    } ?>

                            </div>
                        </div>
                        <footer id="footer">

                            <?php require('partials/global/footer.php'); ?>
                            
                        </footer>
                    </div>
                    <div class="blackout"></div>
                </div>
            </div>
        </main> 

        <?php require('partials/global/scripts.php'); ?>

    </body>
</html>