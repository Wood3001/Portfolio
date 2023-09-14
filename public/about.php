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
        <?php require('partials/global/background.php'); ?>

        <main id="overflow-container">
            <div id="page-container" data-barba="container" data-barba-namespace="about">
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
                                <a id="diploma-wrapper" href="#open-modal">
                                    <img src="images/diploma-bcit.jpg" id="diploma" alt="My BCIT Diploma">
                                    <p>Click To Enlarge</p>
                                </a>
                            </div>
                        </div>
                    </section>
                    <section class="about__sec-2">
                        <div class="section__title section__title-skills">
                            <h1>Skills</h1>
                        </div>
                        <div class="about__skills skills-dev blur about-anim">
                            <div class="sub-title">
                                <h3>Programming Languages</h3>
                                <p>Proficient in a range of programming languages commonly used in web development.</p>
                            </div>
                            <div class="col-wrapper flex">
                                <ul class="col">
                                    <li><p>HTML5</p></li>
                                    <li><p>CSS3</p></li>
                                    <li><p>JavaScript</p></li>
                                    <li><p>PHP</p></li>
                                </ul>
                            </div>  
                        </div>
                        <div class="about__skills skills-des blur about-anim">
                            <div class="sub-title">
                                <h3>Front-End Development</h3>
                                <p>Skilled in front-end technologies, with expertise in creating responsive and interactive web interfaces.</p>
                            </div>
                            <div class="col-wrapper flex">
                                <ul class="col col-1">
                                    <li><h4>Concepts:</h4></li>
                                    <li><p>Responsive Web Design</p></li>
                                    <li><p>CSS Pre/Post Processors</p></li>
                                    <li><p>JavaScript Frameworks and Libraries</p></li>
                                    <li><p>Cross-Browser Compatibility</p></li>
                                    <li><p>Debugging and Browser Tools</p></li>
                                    <li><p>Single Page Applications</p></li>
                                </ul>
                                <ul class="col col-2">
                                    <li><h4>Tech:</h4></li>
                                    <li><p>React.js</p></li>
                                    <li><p>React Native</p></li>
                                    <li><p>TypeScript</p></li>
                                    <li><p>jQuery</p></li>
                                    <li><p>GSAP</p></li>
                                    <li><p>Three.js</p></li>
                                    <li><p>Sass</p></li>
                                    <li><p>Tailwind</p></li>
                                    <li><p>Bootstrap</p></li>
                                    <li><p>Fullpage.js</p></li>
                                    <li><p>Barba.js</p></li>
                                </ul>
                            </div>   
                        </div>
                        <div class="about__skills skills-3d blur about-anim">
                            <div class="sub-title">
                                <h3>Back-End Development</h3>
                                <p>Trained in back-end technologies including server-side scripting and database management for web applications.</p>
                            </div>
                            <div class="col-wrapper flex">
                                <ul class="col col-1">
                                    <li><h4>Concepts:</h4></li>
                                    <li><p>Server-Side Scripting</p></li>
                                    <li><p>Database Management</p></li>
                                    <li><p>RESTful API Development / Integration</p></li>
                                    <li><p>Authentication and Authorization Systems</p></li>
                                    <li><p>Content Management Systems</p></li>
                                </ul>
                                <ul class="col col-2">
                                    <li><h4>Tech:</h4></li>
                                    <li><p></p></li>
                                    <li><p>MySQL</p></li>
                                    <li><p>Laravel</p></li>
                                    <li><p>Node.js</p></li>
                                    <li><p>RESTful API</p></li>
                                    <li><p>Postman</p></li>
                                    <li><p>Wordpress</p></li>
                                </ul>
                            </div>   
                        </div>
                        <div class="about__skills skills-av blur about-anim">
                            <div class="sub-title">
                                <h3>Development Tools</h3>
                                <p>Well-versed in essential development tools to enhance productivity and collaboration throughout the software development process.</p>
                            </div>
                            <div class="col-wrapper flex">
                                <ul class="col col-1">
                                    <li><h4>Concepts:</h4></li>
                                    <li><p>Code Editors</p></li>
                                    <li><p>Package Managers</p></li>
                                    <li><p>Task Runners / Build Tools</p></li>
                                    <li><p>Version Control</p></li>
                                </ul>
                                <ul class="col col-2">
                                    <li><h4>Tech:</h4></li>
                                    <li><p>Visual Studio Code</p></li>
                                    <li><p>Android Studio</p></li>
                                    <li><p>npm</p></li>
                                    <li><p>expo</p></li>
                                    <li><p>yarn</p></li>
                                    <li><p>Webpack</p></li>
                                    <li><p>Git / Github</p></li>
                                </ul>
                            </div>   
                        </div>
                        <div class="about__skills skills-av blur about-anim">
                            <div class="sub-title">
                                <h3>Digital Content Creation</h3>
                                <p>Proficient in digital content creation tools for graphics, music, audio/video editing, 3D modeling and animations, contributing to multimedia-rich web experiences.</p>
                            </div>
                            <div class="col-wrapper flex">
                                <ul class="col col-1">
                                    <li><h4>Concepts:</h4></li>
                                    <li><p>Graphic Design</p></li>
                                    <li><p>Digital Music Composition</p></li>
                                    <li><p>Audio / Video Editing</p></li>
                                    <li><p>3D Modelling</p></li>
                                    <li><p>Keyframe Animation</p></li>
                                </ul>
                                <ul class="col col-2">
                                    <li><h4>Tech:</h4></li>
                                    <li><p>Adobe Photoshop</p></li>
                                    <li><p>Adobe Illustrator</p></li>
                                    <li><p>Adobe After Effects</p></li>
                                    <li><p>Adobe Premier</p></li>
                                    <li><p>Adobe Audition</p></li>
                                    <li><p>Adobe Dimension</p></li>
                                    <li><p>DaVinci Resolve</p></li>
                                    <li><p>Ableton Live</p></li>
                                    <li><p>Blender3D</p></li>
                                </ul>
                            </div>   
                        </div>
                    </section>
                </div>
                <footer id="footer">

                    <?php require('partials/global/footer.php'); ?>
                    
                </footer>
            </div>
        </main>

        <?php require('partials/global/scripts.php'); ?>

    </body>
</html>