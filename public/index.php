<?php

    // import the init page
    require('../db/init.php');

    // declare a variable that executes the find_all function on the Note class
    $artifacts = Artifact::find_all();

    $count = 0;

?><!DOCTYPE html>
<html lang="en">
    
    <?php 
        $title = "Web Developer & Designer";
        $description = "I am a Web Developer and New Media Designer from Vancouver, British Columbia, Canada. I am a student at BCIT, soon entering the workforce!";
        $stylesheet = "styles/partials/home.css";
        require('partials/global/head.php');
    ?>

    <body>

        <?php require('partials/global/header.php'); ?>
        
        <main>
            <div class="overflow-container">
                <div id="page-container">
                    <div id="content-wrap">
                        <section class="sec-1 flex">
                            <div class="home-banner blur">
                                <div class="home-banner__logo flex">
                                    <img  src="images/logo.svg" alt="My S logo">
                                </div>
                                <div class="home-banner__message">
                                    <div class="flex flex-column flex-middle">
                                        <h1>Sherwood Seabrook</h1>
                                        <h2>Web Developer & Designer</h2>
                                    </div>
                                </div>
                                <div class="home-banner__profile-picture flex">
                                    <img src="images/portrait01.jpg" alt="A picture of me">
                                </div>
                                <div class="home-banner__cta flex">
                                    <a href="portfolio.php"><button class="btn-1"><h3>View My Portfolio</h3></button></a>
                                </div>
                            </div>
                        </section>
                        <section class="sec-2">
                            <div class="home-intro__message">
                                
                                <h2>Hello, my name is <span class="bigger my-name">Sherwood.</span></h2>
                                <img src="images/fam-pic1.jpg" alt="a picture of me with my partner and daughter">
                                <div class="home-intro__bg blur"></div>
                                <div class="home-intro__text-box">
                                    <p>I am a Web Developer and New Media Designer based in Vancouver, Canada. I am a student at the British Columbia Institute of Technology. Soon I will be embarking on my new career!</p>
                                    <p>I am excited to continue my learning in a professional environment, and to work with diverse teams to accomplish amazing things!</p>
                                </div>
                                <div class="home-banner__cta">
                                    <a href="about.php"><button class="btn-1"><h3>More About Me</h3></button></a>
                                </div>
                            </div>
                        </section>
                        <section class="sec-3">
                            <div class="home-card__heading flex flex-column flex-end">
                                <h2>Featured Projects</h2>
                            </div>
                            <div class="home-card__container flex flex-middle"> 

                                <?php while($count < 4 && $artifact = $artifacts->fetch_assoc()) {
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
            <div class="blackout"></div>
        </main>

        <?php require('partials/global/scripts.php'); ?>

    </body>
</html>