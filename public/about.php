<!DOCTYPE html>
<html lang="en" data-barba="wrapper">
    
    <?php 
        $title = "About Me";
        $description = "I live in Vancouver BC with my wife & daughter. I appreciate teamwork, inclusivity, creativity and fun.";
        $stylesheet = "styles/partials/about.css";
        require('partials/global/head.php');
    ?>

    <body>

        <?php require('partials/global/header.php'); ?>

        <main>
            <div class="overflow-container" data-barba="container" data-barba-namespace="about">
                <div>
                    <div id="page-container">
                        <div>
                            <section class="about__sec-1 grid">
                                <div class="section__title section__title-about">
                                    <h1>About</h1>
                                </div>
                                <div class="about__bio scroll-box__container blur flex">
                                    <div class="scroll-box">
                                        <p>My name is Richard <span class="highlight-txt">Sherwood</span> Seabrook. I live in Vancouver BC with my partner Cheyenne and our young daughter Siona. Prior to the COVID-19 pandemic I ran a busy mobile DJ business, providing audio & DJ services around the lower mainland and beyond. Due to several changes in my life, in 2021 I elected to leave the DJ business and embark on a career in the media & technology field.</p>
                                        <p>I have a life-long passion for digital media design. Prior to my education, I have spent thousands of hours learning various audio, video and graphic design applications. In 2022, I enrolled in BCIT’s New Media Design and Web Development program to learn new skills and gain formal training in others. It was during this program that I set my sights on a web development career.</p>
                                        <p>Although I had learned the basics of HTML/CSS at Vancouver Community College several years before, it was my studies at BCIT that really ignited a passion for web development. Learning JavaScript opened up a whole new world of possibilities, and I was particularly interested in it's capabilities for animation and interactivity. I am excited to continue learning this powerful language and unlock the creative prowess of it's many libraries and plug ins.</p>
                                        <p>In my personal hours, I love spending time with my family, cycling, cooking and studying music history. I collect vinyl records in many genres including hip hop, funk, soul, house and jazz. I love books, film and televison, particularly of the sci-fi, fantasy and crime genres.</p>
                                    </div>
                                </div>
                                <div class="about__profile-picture flex flex-start">
                                    <img src="images/portrait01.jpg" alt="A picture of me">
                                </div>
                            </section>
                            <section class="about__sec-2 grid">
                                <div class="section__title section__title-skills">
                                    <h1>Skills</h1>
                                </div>
                                <div class="about__skills skills-dev">  
                                    <div class="sub-title">
                                        <h3>Web Development</h3>
                                        <div class="col-wrapper flex blur">
                                            <ul class="col">
                                                <li><p>HTML/CSS</p></li>
                                                <li><p>JavaScript</p></li>
                                                <li><p>PHP/SQL</p></li>
                                                <li><p>React</p></li>
                                                <li><p>JS Libraries:</p></li>
                                                <li>
                                                    <ul>
                                                        <li><p>jQuery</p></li>
                                                        <li><p>GSAP</p></li>
                                                        <li><p>Three.js</p></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>   
                                </div>
                                <div class="about__skills skills-des">  
                                    <div class="sub-title">
                                        <h3>Design</h3>
                                        <div class="col-wrapper flex blur">
                                            <ul class="col">
                                                <li><p>Adobe Photoshop</p></li>
                                                <li><p>Adobe Illustrator</p></li>
                                                <li><p>Adobe InDesign</p></li>
                                                <li><p>Adobe XD</p></li>
                                                <li><p>Figma</p></li>
                                            </ul>
                                        </div>
                                    </div>   
                                </div>
                                <div class="about__skills skills-3d">  
                                    <div class="sub-title">
                                        <h3>3D Modelling & Animation</h3>
                                        <div class="col-wrapper flex blur">
                                            <ul class="col">
                                                <li><p>Adobe Dimension</p></li>
                                                <li><p>Adobe Aero</p></li>
                                                <li><p>Blender 3D</p></li>
                                                <li><p></p></li>
                                                <li><p></p></li>
                                                <li><p></p></li>
                                            </ul>
                                        </div>
                                    </div>   
                                </div>
                                <div class="about__skills skills-av">  
                                    <div class="sub-title">
                                        <h3>Audio / Video</h3>
                                        <div class="col-wrapper flex blur">
                                            <ul class="col">
                                                <li><p>Adobe Premier</p></li>
                                                <li><p>Adobe AfterEffects</p></li>
                                                <li><p>Adobe Audition</p></li>
                                                <li><p>Davinci Resolve</p></li>
                                                <li><p>GarageBand</p></li>
                                                <li><p>Ableton Live</p></li>
                                            </ul>
                                        </div>
                                    </div>   
                                </div>
                            </section>
                        </div>
                        <footer id="footer">

                            <?php require('partials/global/footer.php'); ?>

                        </footer>
                    </div>
                </div>
            </div>
            <div class="blackout"></div>
        </main>

        <?php require('partials/global/scripts.php'); ?>

    </body>
</html>