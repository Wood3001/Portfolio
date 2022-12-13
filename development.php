<!DOCTYPE html>
<html lang="en">

    <?php
        $title = "Development Portfolio";
        $description = "Projects that highlight my web development and scripting abilities, including use of HTML,CSS, JavaScript and several associated libraries and plug-ins.";
        $stylesheet = "styles/development.css";
        require('partials/global/head.php'); 
    ?>

    <body>
        <?php require('partials/global/header.php'); ?>
        <main>
            <div class="disc-section__title flex flex-column flex-middle"><h1>Development</h1></div>
            <div class="overflow-container">
                <div id="page-container">
                    <div id="content-wrap">
                        <div class="disc-card__container flex flex-middle">
                            <div class="card flex flex-column blur">
                                <div class="card__image">
                                    <img src="../images/robot.jpg" alt="Preview image for my Robot Workshop project">
                                </div>
                                <div class="card__message">
                                    <h3>2022-12-01</h3>
                                    <h2>Robot  Laboratory</h2>
                                    <p>I built this fun interactive toy using JS libraries. Mix & match facial features on a series of cartoon robots.</p>
                                </div>
                                <div class="card__cta flex">
                                    <a href="artifact-1.php"><button class="btn-1 btn-flattop"><h3>View Project Details</h3></button></a>
                                </div>
                            </div>
                            <div class="card flex flex-column blur">
                                <div class="card__image">
                                    <img src="../images/jsguide1.jpg" alt="Preview image for my JavaScript Guide project">
                                </div>
                                <div class="card__message">
                                    <h3>2022-12-01</h3>
                                    <h2>JavaScript Guide</h2>
                                    <p>I made this introductory guide to demonstrate my understanding of core JavaScript concepts.</p>
                                </div>
                                <div class="card__cta flex">
                                    <a href="artifact-2.php"><button class="btn-1 btn-flattop"><h3>View Project Details</h3></button></a>
                                </div>
                            </div>
                            <div class="card flex flex-column blur">
                                <div class="card__image">
                                    <img src="../images/gridesc.jpg" alt="Preview image for my Grid Escape project">
                                </div>
                                <div class="card__message">
                                    <h3>2022-12-01</h3>
                                    <h2>Grid Escape</h2>
                                    <p>I used JS libraries to realize this simple game concept. Additional features are in development.</p>
                                </div>
                                <div class="card__cta flex">
                                    <a href="artifact-3.php"><button class="btn-1 btn-flattop"><h3>View Project Details</h3></button></a>
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