<?php

    // import the init page
    require('../db/init.php');


?><!DOCTYPE html>
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
                        <div class="full-width">
                            <section class="about__sec-1">
                                <div class="section__title section__title-about">
                                    <h1>About</h1>
                                </div>
                                <div class="about__bio scroll-box__container blur flex">
                                    <div class="scroll-box">
                                        <p>My name is Richard <span class="highlight-txt">Sherwood</span> Seabrook. I have recently earned my "New Media Design & Web Development" Diploma from the British Columbia Institute of Technology. My educational journey has ignited a deep passion for crafting captivating user experiences. I specialize in transforming design concepts into seamlessly functioning interfaces, leveraging my proficiency in a diverse range of modern web technologies such as HTML5, CSS3, JavaScript, and responsive design principles. With an unwavering commitment to detail, strong problem-solving skills, and a dedication to staying current with industry trends, I consistently deliver digital solutions that blend aesthetics with functionality.</p>
                                        <p>I live in Vancouver, BC, with my partner Cheyenne and our young daughter Siona. Prior to the COVID-19 pandemic, I managed a thriving mobile DJ business, providing audio and DJ services across the lower mainland and beyond. However, in 2021, I decided to pivot my career towards the dynamic world of media and technology. This transition aligns perfectly with my lifelong passion for digital content creation, encompassing music, video, and animation.</p>
                                        <p>Since completing my diploma, I've remained committed to continuous learning through platforms like LinkedIn Learning and YouTube. Additionally, I've started contributing to open-source projects to further develop my skills. Currently, I'm actively seeking a full-time role as a Junior Front End Developer, with a strong desire to join a forward-thinking employer who values creativity and innovation within a respectful work environment. Let's collaborate and create something remarkable together!</p>
                                    </div>
                                </div>
                                <div class="about__profile-picture flex flex-start">
                                    <img src="images/portrait01.jpg" alt="A picture of me" width="400" height="400">
                                    <div class="about__cta">
                                        <a href="SherwoodSeabrook_Resume.pdf" download><button class="btn-1" aria-label="Download My Resume"><h3>Download My Resume</h3></button></a>
                                        <a href="mailto:contact@sherwoodseabrook.com"><button class="btn-1" aria-label="Send Me An Email"><h3>Send Me An Email</h3></button></a>
                                    </div>
                                </div>
                            </section>
                            <section class="about__sec-2">
                                <div class="section__title section__title-skills">
                                    <h1>Skills</h1>
                                </div>
                                <div class="about__skills skills-dev blur about-anim">
                                    <div class="col-wrapper flex flex-column">
                                        <ul class="col">
                                            <li><h3>Web & App Development</h3></li>
                                            <li><p>HTML/CSS</p></li>
                                            <li><p>JavaScript</p></li>
                                            <li><p>PHP/MySQL</p></li>
                                            <li><p>React Native</p></li>
                                            <li><p>Laravel</p></li>
                                            <li><p>Wordpress</p></li>
                                            <li><p>REST APIs</p></li>
                                            <li><p>Node.js</p></li>
                                        </ul>
                                    </div>  
                                </div>
                                <div class="about__skills skills-des blur about-anim">
                                    <div class="col-wrapper flex flex-column">
                                        <ul class="col">
                                            <li><h3>Design</h3></li>
                                            <li><p>Adobe Photoshop</p></li>
                                            <li><p>Adobe Illustrator</p></li>
                                            <li><p>Adobe InDesign</p></li>
                                            <li><p>Adobe XD</p></li>
                                            <li><p>Figma</p></li>
                                        </ul>
                                    </div>   
                                </div>
                                <div class="about__skills skills-3d blur about-anim">
                                    <div class="col-wrapper flex flex-column">
                                        <ul class="col">
                                            <li><h3>3D Modelling & Animation</h3></li>
                                            <li><p>Adobe Dimension</p></li>
                                            <li><p>Adobe Aero</p></li>
                                            <li><p>Blender 3D</p></li>
                                        </ul>
                                    </div>   
                                </div>
                                <div class="about__skills skills-av blur about-anim">
                                    <div class="col-wrapper flex flex-column">
                                        <ul class="col">
                                            <li><h3>Audio / Video</h3></li>
                                            <li><p>Adobe Premier</p></li>
                                            <li><p>Adobe AfterEffects</p></li>
                                            <li><p>Adobe Audition</p></li>
                                            <li><p>Davinci Resolve</p></li>
                                            <li><p>GarageBand</p></li>
                                            <li><p>Ableton Live</p></li>
                                        </ul>
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