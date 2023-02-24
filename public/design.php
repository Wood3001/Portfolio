<?php

    // import the init page
    require('../db/init.php');

    // declare a variable that executes the find_all function on the Note class
    $artifacts = Artifact::find_all();

?><!DOCTYPE html>
<html lang="en">

    <?php
        $title = "Design Portfolio";
        $description = "These projects highlight my skills related to Graphic Design, Illustration, Web Design, UI/UX Design and 3D Design.";
        $stylesheet = "styles/design.css";
        require('partials/global/head.php'); 
    ?>

        <body data-barba="wrapper">

        <?php require('partials/global/header.php'); ?>

        <main>
            <div data-barba="container">
                <div class="disc-section__title flex flex-column">
                    <div class="title-container">
                        <div class="breadcrumb-container flex flex-row">
                            <a class="breadcrumb" href="../../../public/portfolio.php">Portfolio</a>
                        </div>
                        <h1>Design</h1>
                    </div>
                </div>
                <div class="overflow-container">
                    <div id="page-container">
                        <div id="content-wrap">
                            <div class="disc-card__container flex flex-middle">

                                <?php while($artifact = $artifacts->fetch_assoc()) {
                                    if ($artifact['discipline'] == 1){
                                        include(get_path('public/partials/global/card.php'));
                                    }} ?>

                            </div>
                        </div>
                        <footer id="footer">

                            <?php require('partials/global/footer.php'); ?>

                        </footer>
                    </div>
                </div>
                <div class="blackout"></div>
            </div>
        </main> 

            <?php require('partials/global/scripts.php'); ?>
        
    </body>
</html>