<!DOCTYPE html>
<html lang="en">
 
    <?php 
        $title = "Grid Escape";
        $description = "This project demonstrates use of conditional logic to create a simple game. GSAP plugin Draggable is implemented to facilitate movement.";
        $stylesheet = "styles/artifact-3.css";
        require('partials/global/head.php');
    ?>

    <body>
        
        <?php require('partials/global/header.php'); ?>

        <main>
            <div class="artifact__heading flex flex-middle">
                <h1>Grid Escape</h1>
            </div>
            <div class="overflow-container">
                <div id="page-container">
                    <div id="content-wrap">
                        <div class="artifact flex flex-column">
                            <div class="artifact__narrative blur flex" id="specs">
                                <div>
                                    <h3>Technologies Used:</h3>
                                    <ul>
                                        <li>GSAP Draggable</li>
                                        <li>GSAP Inertia</li>
                                        <li>jQuery</li>
                                        <li>jQuery UI</li>
                                    </ul>
                                </div>
                                <div>
                                    <h3>Start Date:</h3>
                                    <ul>
                                        <li>2022-08-15</li>
                                    </ul>
                                </div>
                                <div>
                                    <h3>Finish Date:</h3>
                                    <ul>
                                        <li>2022-10-03</li>
                                    </ul>
                                </div>
                                <div>
                                    <h3>Total Hours:</h3>
                                    <ul>
                                        <li>34</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="artifact__narrative blur" id="nar1">
                                <p>I started this project with the intention of practicing my JavaScript skills during my term break, and to experiment with basic game development. I wanted to create an original, grid-based game that would involve sliding blocks around a grid. I wanted to achieve this using skills I had learned in my ‘Web Scripting’ and ‘Animation for New Media’ courses at BCIT. </p>
                            </div>
                            <div class="artifact__image" id="pic1">
                                <img src="images/arti-3-1.jpg" alt="a screenshot of my potatohead app">
                            </div>
                            <div class="artifact__narrative blur" id="nar2">
                                <p>I began by brainstorming game logic by creating a mock-up in Adobe InDesign, where I experimented with different ways of moving blocks around the grid. I arrived at the idea of having one block that would move on it’s own, as the user cleared a path for it. I decided the object of the game would be to guide the ‘escapee’ block from one corner of the grid to the ‘exit’ at the opposite corner. Each time the user moved a block one grid unit, the escapee would move one unit closer to the exit, if not blocked. The game ends when the escapee reaches the exit.</p>
                            </div>
                            <div class="artifact__image" id="pic2">
                                <img src="images/arti-3-2.jpg" alt="a photo of my concept sketches">
                            </div>
                            <div class="artifact__narrative blur" id="nar3">
                                <p>I was soon overwhelmed with ideas for obstacles and hazards to make the game more challenging, but decided to focus on the basic game for my first version, and save the added features for future iterations. I broke down my goal into a series of tasks and set about coding my game.</p>
                                <br>
                                <h3>Tasks:</h3>
                                <ul>
                                    <li>Create game board (grid)</li>
                                    <li>Create draggable blocks (the blocks the user moves to make way for the escapee)</li>
                                    <li>Make the blocks only drag one unit horizontally or vertically per drag</li>
                                    <li>Implement collision detection so the blocks can not overlap</li>
                                    <li>Create the escapee block</li>
                                    <li>Make the escapee move after a block is dragged</li>
                                    <li>Allow the player to check if an adjacent square is occupied</li>
                                    <li>Make the escapee move one block vertically if unoccupied, or one block horizontally if unoccupied</li>
                                    <li>Trigger an ending sequence when the escapee reaches the exit</li>
                                    <li>Apply styling and minimal design elements</li>
                                </ul>
                            </div>
                            <div class="artifact__image" id="pic3">
                                <img src="images/arti-3-4.jpg" alt="a screenshot of my vector graphics">
                            </div>
                            <div class="artifact__narrative blur" id="nar4">
                                <p>My game board was adapted from an example graphic for GSAP’s ‘Draggable’ plug in. The plug in allows any html element to be dragged and ‘thrown’ smoothly around the page, according to a set of configuration properties. Draggable also enables collision detection, which is important for my game. A <span class="is-orange">for</span> loop is used to create a grid of divs in accordance with a series of global parameters, which are placed in a container div by way of a jQuery <span class="is-orange">appendTo()</span> method. I began with a 5x5 grid.</p>
                                <p>To create the draggable boxes, I used another for loop. These were made draggable using the <span class="is-orange">Draggable.create()</span> method. The ‘snap’ property already included functions to snap draggable objects to the grid on the x & y axes. I had to tweak some of the other VARS properties to get the kind of movement I wanted, including setting the <span class="is-orange">lockAxis</span> property to true. This would restrict movement to only the X or Y axis.</p>
                            </div>
                            <div class="artifact__image" id="pic4">
                                <img src="images/arti-3-3.jpg" alt="a screenshot of my robot app">
                            </div>
                            <div class="artifact__narrative blur" id="nar5">
                                <p>The most challenging task was devising a system to check if grid cells adjacent to the escapee were occupied. Ultimately, my function would use a for loop to loop through each grid cell, applying another for loop to the draggable blocks to check, using GSAP’s <span class="is-orange">getProperty</span> method, if any were occupying the same space. After each drag, this function would execute and apply a special class to each unoccupied grid cell. With this information, my function to move the escapee could test if there was an open cell to move into on either axis.</p>
                                <p>After some trial and error, I was able to get the game functioning as intended. I wrote a function that would animate a screen saying ‘you won’ (with a ‘reset’ button) when the escapee reached the exit.</p>
                                <p>Since then, I have added another type of block – a grey, unmovable block that is placed randomly and introduces another level of difficulty in plotting the escapee’s path to the exit.</p>
                            </div>
                            <div class="artifact__cta flex">
                                <a href="http://www.artifact-3.sherwoodseabrook.com" target="_blank"><button class="btn-1"><h3>View The Project</h3></button></a>
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