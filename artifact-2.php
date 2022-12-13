<!DOCTYPE html>
<html lang="en">
 
    <?php 
        $title = "JavaScript Guide";
        $description = "This project demonstrates implementation of the JavaScript libraries and plug-ins including jQuery and FullPage.js. Core JS concepts are explained.";
        $stylesheet = "styles/artifact-2.css";
        require('partials/global/head.php');
    ?>

    <body>
        
        <?php require('partials/global/header.php'); ?>

        <main>
            <div class="artifact__heading flex flex-middle">
                <h1>JavaScript Guide</h1>
            </div>
            <div class="overflow-container">
            <div id="page-container">
                <div id="content-wrap">
                    <div class="artifact flex flex-column">
                        <div class="artifact__narrative blur flex" id="specs">
                            <div>
                                <h3>Technologies Used:</h3>
                                <ul>
                                    <li>GSAP</li>
                                    <li>jQuery</li>
                                    <li>jQuery UI</li>
                                    <li>Fullpage.js</li>
                                    <li>Slick Slider</li>
                                </ul>
                            </div>
                            <div>
                                <h3>Start Date:</h3>
                                    <li>2022-07-27</li>
                                </ul>
                            </div>
                            <div>
                                <h3>Finish Date:</h3>
                                <ul>
                                    <li>2022-08-11</li>
                                </ul>
                            </div>
                            <div>
                                <h3>Total Hours:</h3>
                                <ul>
                                    <li>27</li>
                                </ul>
                            </div>
                        </div>
                        <div class="artifact__narrative blur" id="nar1">
                            <p>This website is an introductory guide to the basics of JavaScript and some of it’s peripherals. Its purpose is to demonstrate the student’s scripting abilities and general knowledge acquired in BCIT’s “Web Scripting 1” course. Also incorporated in this site for demonstration purposes are some projects from the “Animation for New Media” and “Mobile Web” courses that demonstrate the student’s deployment of 3rd party plug-ins and libraries.</p>
                            <p>This piece was generated for my term project in “Web Scripting 1”, in Term 2 of BCIT’s New Media Design and Web Development program. The assignment was to create an introductory guide to JavaScript with 3 sections covering a range of topics chosen from a provided list of suggestions.</p>
                        </div>
                        <div class="artifact__image" id="pic1">
                            <img src="images/arti-2-4.jpg" alt="a photo of my code on screen">
                        </div>
                        <div class="artifact__narrative blur" id="nar2">
                            <p>It was my intention with this site to keep the design aesthetic quite minimal and focus my efforts on creating a smooth and relaxing user experience that would be conducive to learning. I wanted to use different color themes to separate the 3 sections, while maintaining common typography to give continuity throughout the site. I generated lo-fi thumbnail sketches (hand drawn) to visualize the distribution of my content over the slides for each section.</p>
                        </div>
                        <div class="artifact__image" id="pic2">
                            <img src="images/arti-2-1.jpg" alt="a photo of my color scheme and thumbnail' sketches">
                        </div>
                        <div class="artifact__narrative blur" id="nar3">
                            <p>I wanted to make a ‘full-screen scrolling’ site so I decided to use a Javascript plugin we were introduced to in class. Fullpage.js provides a simple HTML structure for smooth-scrolling ‘single page’ sites with optional landscape scrolling. I put each of my top-level sections in a ‘section’ div, and the content of each section is distributed over a series of horizontally scrolling ‘slide’ divs.</p>
                        </div>
                        <div class="artifact__image" id="pic3">
                            <img src="images/arti-2-3.jpg" alt="a screenshot of a page from my site">
                        </div>
                        <div class="artifact__narrative blur" id="nar4">
                            <p>The first section of my site explains some basic scripting concepts using lists, diagrams and code snippets. In this section I have used the jQuery UI Library to implement collapsible ‘accordions’ to maximize page space. Three subheadings cover some basic Javascript concepts: The DOM, Functions and Variables. I used the [code] tag to display code snippets in my slides. I created a chart in Adobe Illustrator to illustrate the DOM hierarchy.</p>
                        </div>
                        <div class="artifact__image" id="pic4">
                            <img src="images/arti-2-2.jpg" alt="a screenshot of my DOM chart">
                        </div>
                        <div class="artifact__narrative blur" id="nar5">
                            <p>In the second section, I describe and demonstrate some uses of the jQuery library. In the third section I describe and demonstrate some JavaScript add-ons. Examples include: GSAP (Green Sock Animation Protocol), an animation library with many useful features; and Slick Slider, an image slider plug in with many possible configurations. I have included projects from my 'Animation For New Media' and 'Mobile Web' classes as examples of each, respectively.</p>
                        </div>
                        <div class="artifact__narrative artifact__sources blur" id="nar6">
                            <h3>Acknowledgements</h3>
                            <div class="list-container flex">
                                <ul>
                                    <li><a href="https://www.w3schools.com" target="_blank">https://www.w3schools.com</a></li>
                                    <li><a href="https://developer.mozilla.org" target="_blank">https://developer.mozilla.org</a></li>
                                    <li><a href="https://linuxhint.com" target="_blank">https://linuxhint.com</a></li>
                                </ul>
                                <ul>
                                    <li><a href="https://www.geeksforgeeks.org" target="_blank">https://www.geeksforgeeks.org</a></li>
                                    <li><a href="https://www.tutorialrepublic.com" target="_blank">https://www.tutorialrepublic.com</a></li>
                                    <li><a href="https://api.jquery.com" target="_blank">https://api.jquery.com</a></li>
                                </ul>
                                <ul>
                                    <li><a href="https://github.com/alvarotrigo/fullpage.js" target="_blank">https://github.com/alvarotrigo/fullpage.js</a></li>
                                    <li><a href="https://jqueryui.com/" target="_blank">https://jqueryui.com/</a></li>
                                    <li><a href="https://greensock.com/" target="_blank">https://greensock.com/</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="artifact__cta flex">
                            <a href="http://www.artifact-2.sherwoodseabrook.com" target="_blank"><button class="btn-1"><h3>View The Project</h3></button></a>
                        </div>
                    </div>
                </div>
                <footer id="footer">

                    <?php require('partials/global/footer.php'); ?>

                </footer>
            </div>
            <div class="blackout"></div>
        </main> 
        <?php require('partials/global/scripts.php'); ?>
    </body>
</html>