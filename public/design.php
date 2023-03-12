<?php

    // import the init page
    require('../db/init.php');

    // declare a variable that executes the find_all function on the Note class
    $artifacts = Artifact::find_all();

?><!DOCTYPE html>
<html lang="en" data-barba="wrapper">

<?php
        $title = "Design Portfolio";
        $description = "These projects highlight my skills related to Graphic Design, Illustration, Web Design, UI/UX Design and 3D Design.";
        $stylesheet = "styles/design.css";
        require('partials/global/head.php'); 
    ?>

    <body>

        <?php require('partials/global/header.php'); ?>

        <main>
            <div class="overflow-container" data-barba="container" data-barba-namespace="des">
                <div id="page-container">
                    <div class="full-width">
                        <div class="disc-section__title">
                            <div class="title-container">
                                <div class="breadcrumb-container flex flex-row">
                                    <a class="breadcrumb" href="../../../public/portfolio.php">All Projects</a>
                                </div>
                                <h1>Design</h1>
                            </div>
                        </div>
                        <div class="disc-card__container flex js-descards">
                            <div class="card-wrap flex">

                                <?php while($artifact = $artifacts->fetch_assoc()) {
                                    if ($artifact['discipline'] == 1){
                                        include(get_path('public/partials/global/card.php'));
                                    }} ?>

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