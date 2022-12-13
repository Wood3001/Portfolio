<!DOCTYPE html>
<html lang="en">

    <?php
        $title = "Design Portfolio";
        $description = "These projects highlight my skills related to Graphic Design, Illustration, Web Design, UI/UX Design and 3D Design.";
        $stylesheet = "styles/design.css";
        require('partials/global/head.php'); 
    ?>

    <body>
        <?php require('partials/global/header.php'); ?>
        <main>
            <div class="disc-section__title flex flex-column flex-middle"><h1>Design</h1></div>
            <div class="overflow-container">
                <div id="page-container">
                    <div id="content-wrap">
                        <div class="disc-card__container flex flex-middle">
                            <div class="card flex flex-column blur">
                                <div class="card__image">
                                    <img src="../images/domepiece.jpg" alt="Preview image for my Domepiece Media project">
                                </div>
                                <div class="card__message">
                                    <h3>2022-12-01</h3>
                                    <h2>Domepiece Media</h2>
                                    <p>I designed this functional mock-up of an online store to demonstrate my UI prototyping abilities.</p>
                                </div>
                                <div class="card__cta flex">
                                    <a href="artifact-4.php"><button class="btn-1 btn-flattop"><h3>View Project Details</h3></button></a>
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