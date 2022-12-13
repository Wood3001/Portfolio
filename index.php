<!DOCTYPE html>
<html lang="en">
    
    <?php 
        $title = "Web Developer & Designer";
        $description = "I am a Web Developer and New Media Designer from Vancouver, British Columbia, Canada. I am a student at BCIT, soon entering the work force!";
        $stylesheet = "styles/partials/home.css";
        require('partials/global/head.php');
    ?>

    <body>
`
        <?php require('partials/global/header.php'); ?>
        
        <main>
            <div class="overflow-container">
                <div id="page-container">
                    <div id="content-wrap">
                        <section class="sec-1 grid">
                            <div class="home-banner">
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
                                    <a href="development.php"><button class="btn-1"><h3>View My Portfolio</h3></button></a>
                                </div>
                            </div>
                        </section>
                        <section class="sec-2 flex">
                            <div class="home-intro__message">
                                <div class="home-intro__hello">
                                    <div class="home-intro__hello-content flex">
                                    <h2>Hello, my name is <span class="bigger my-name">Sherwood.</span></h2>
                                    <img src="images/fam-pic1.jpg" alt="a picture of me with my partner and daughter">
                                    </div>
                                </div>
                                <div class="home-intro__bg blur flex flex-middle">
                                    <div class="home-intro__text-box">
                                        <p>I am a Web Developer and New Media Designer based in Vancouver, Canada. I am a student at the British Columbia Institute of Technology. Soon I will be embarking on my new career!</p>
                                        <p>I am excited to continue my learning in a professional environment, and to work with diverse teams to accomplish amazing things!</p>
                                    </div>
                                </div>

                                <div class="home-banner__cta flex flex-column flex-middle">
                                    <a href="about.php"><button class="btn-1"><h3>More About Me</h3></button></a>
                                </div>
                            </div>
                        </section>
                        <section class="sec-3">
                            <div class="home-card__heading flex flex-column flex-middle flex-end">
                                <h2>Featured Projects</h2>
                            </div>
                            <div class="home-card__container flex flex-middle"> 
                                <a href="artifact-1.php">
                                    <div class="home-card flex flex-column blur">
                                        <div class="home-card__image">
                                            <img src="../images/robot.jpg" alt="Preview image for my Robot Workshop project">
                                        </div>
                                        <div class="home-card__message">
                                            <h2>Robot Laboratory</h2>
                                            <h3>Web Development | 2022-12-01</h3>
                                        </div>
                                    </div>
                                </a>
                                <a href="artifact-2.php">
                                    <div class="home-card flex flex-column blur">
                                        <div class="home-card__image">
                                            <img src="../images/jsguide1.jpg" alt="Preview image for my JavaScript Guide project">
                                        </div>
                                        <div class="home-card__message">
                                            <h2>JavaScript Guide</h2>
                                            <h3>Web Development | 2022-12-01</h3>
                                        </div>
                                    </div>
                                </a>
                                <a href="artifact-3.php">
                                    <div class="home-card flex flex-column blur">
                                        <div class="home-card__image">
                                            <img src="../images/gridesc.jpg" alt="Preview image for my Grid Escape project">
                                        </div>
                                        <div class="home-card__message">
                                            <h2>Grid Escape</h2>
                                            <h3>Web Development | 2022-12-01</h3>
                                        </div>
                                    </div>
                                </a>
                                <a href="artifact-4.php">
                                    <div class="home-card flex flex-column blur">
                                        <div class="home-card__image">
                                            <img src="../images/domepiece.jpg" alt="Preview image for my Domepiece Media project">
                                        </div>
                                        <div class="home-card__message">
                                            <h2>Domepiece Media</h2>
                                            <h3>Design | 2022-12-01</h3>
                                        </div>
                                    </div>
                                </a>
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