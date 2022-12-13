<!DOCTYPE html>
<html lang="en">
 
    <?php 
        $title = "Robot Workshop";
        $description = "This project demonstrates my understanding and implementation of JavaScript libraries including jQuery and GSAP. Skills applied include conditional logic, SVG animation and vector illustration.";
        $stylesheet = "styles/artifact-1.css";
        require('partials/global/head.php');
    ?>

    <body>
        
        <?php require('partials/global/header.php'); ?>

        <main>
            <div class="artifact__heading flex flex-middle">
                <h1>Robot  Laboratory</h1>
            </div>
            <div class="overflow-container">
                <div id="page-container">
                    <div id="content-wrap">
                        <div class="artifact flex flex-column">
                            <div class="artifact__narrative blur flex" id="specs">
                                <div>
                                    <h3>Technologies Used:</h3>
                                    <ul>
                                        <li>Scalable Vector Graphics (SVG)</li>
                                        <li>GSAP</li>
                                        <li>jQuery</li>
                                        <li>jQuery UI</li>
                                    </ul>
                                </div>
                                <div>
                                    <h3>Start Date:</h3>
                                        <li>2022-07-10</li>
                                    </ul>
                                </div>
                                <div>
                                    <h3>Finish Date:</h3>
                                    <ul>
                                        <li>2022-09-24</li>
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
                                <p>Development of this artifact began in my “Animation for New Media” class at BCIT. Students were assigned to create an animation using <a href="https://greensock.com/gsap/">GSAP</a>, a library for JavaScript. While completing some in-class exercises, I had the idea to make an animated ‘potato head’, inspired by the classic childrens’ toy. Cartoon facial features would fly in and out over an illustrated potato, with wig or hat when the other features are combined correctly. </p>
                            </div>
                            <div class="artifact__image" id="pic1">
                                <img src="images/arti-1-1.jpg" alt="a screenshot of my potatohead app">
                            </div>
                            <div class="artifact__narrative blur" id="nar2">
                                <p>I wanted to make the animation more original for my portfolio, so I set about re-imagining the character. I decided to lose the potato and go with a robot theme, and instead of a static potato I would have a series of different robot heads that could be swapped. I dropped the hat function and instead wrote a function that would match the color of the facial features to the head they were placed on.</p>
                            </div>
                            <div class="artifact__image" id="pic2">
                                <img src="images/arti-1-2.jpg" alt="a photo of my concept sketches">
                            </div>
                            <div class="artifact__narrative blur" id="nar3">
                                <p>I began with a pen & pad to sketch out a few character ideas. After I felt I had sufficient roughs to work with, I opened Adobe Illustrator and went about creating my vector graphics. I created 4 characters, each on a separate artboard, using guidelines to make sure the facial features aligned with each head. Each array item was placed on its own layer and named accordingly. After the illustrations were complete. I stacked them all on to one artboard. I then exported the SVG code and used SVGOMG.com to ‘prettify’ the code, and strip out un-needed markup. Now I was ready to place my SVG code into my HTML file where I could manipulate the individual components with JavaScript.</p>
                            </div>
                            <div class="artifact__image" id="pic3">
                                <img src="images/arti-1-3.jpg" alt="a screenshot of my vector graphics">
                            </div>
                            <div class="artifact__narrative blur" id="nar4">
                                <p>First, I declared an array for each set of facial features (right eye, left eye, nose & mouth) and the head. Next, I had to write functions that would loop through & animate the different components with GSAP methods. Using conditional logic, I wrote a function that would first check if a head graphic was visible, and if so, animate it off the screen and then animate in the next head in the array. If no head was visible, the first head in the array would be loaded. A nested ‘if’ statement was used to check if the visible head was the last in the array, and if so, would animate it out and leave the screen blank.</p>
                            </div>
                            <div class="artifact__image" id="pic4">
                                <img src="images/arti-1-4.jpg" alt="a screenshot of my robot app">
                            </div>
                            <div class="artifact__narrative blur" id="nar5">
                                <p>Similar functions were tailored for the mouth and nose, and one to control both eyes. I did not want the user to be able to see facial features if no head was visible, so I wrote additional logic to show a large yellow ‘X’, to visually indicate an error, if any facial feature functions were called without a head visible. </p>
                                <p>Now I could scroll through heads and mix & match facial features, but the colors were mismatched. To address this, I first declared an array of 8 colors – a background and highlight color for each character. I added statements to the ‘head’ function that would take a pair of colors from the array assign each to a class of SVG elements for each changing color in the features. Now, the facial features would always match the color of the head they were seen against.</p>
                            </div>
                            <div class="artifact__image" id="pic5">
                                <img src="images/arti-1-5.jpg" alt="a screenshot of my UI">
                            </div>
                            <div class="artifact__narrative blur" id="nar6">
                                <p>Finally, I needed UI elements to call the various functions. Using Adobe Illustrator’s 3D features, I designed buttons to call each of my 4 main functions, plus a ‘reset’ button that would call a function to reload the page. Each button has a ‘pressed’ and ‘unpressed’ state. I used the :active selector in css to animate the button states, and set event listeners in my script to call each function on click.</p>
                            </div>
                            <div class="artifact__cta flex">
                                <a href="http://www.artifact-1.sherwoodseabrook.com" target="_blank"><button class="btn-1"><h3>View The Project</h3></button></a>
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