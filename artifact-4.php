<!DOCTYPE html>
<html lang="en">
 
    <?php 
        $title = "Domepiece Media";
        $description = "This high fidelity mockup of an online store demonstrates my competence with prototyping tool Figma. Applied skills include UI/UX design, 3D Modelling.";
        $stylesheet = "styles/artifact-4.css";
        require('partials/global/head.php');
    ?>

    <body>
        
        <?php require('partials/global/header.php'); ?>

        <main>
        <div class="artifact__heading flex flex-middle">
                <h1>Domepiece Media</h1>
            </div>
            <div class="overflow-container">
                <div id="page-container">
                    <div id="content-wrap">
                        <div class="artifact flex flex-column">
                            <div class="artifact__narrative blur flex" id="specs">
                                <div>
                                    <h3>Technologies Used:</h3>
                                    <ul>
                                        <li>Figma</li>
                                        <li>Maze</li>
                                        <li>Blender3D</li>
                                        <li>Adobe Photoshop</li>
                                        <li>Adobe Illustrator</li>
                                    </ul>
                                </div>
                                <div>
                                    <h3>Start Date:</h3>
                                    <ul>
                                        <li>2022-07-23</li>
                                    </ul>
                                </div>
                                <div>
                                    <h3>Finish Date:</h3>
                                    <ul>
                                        <li>2022-08-07</li>
                                    </ul>
                                </div>
                                <div>
                                    <h3>Total Hours:</h3>
                                    <ul>
                                        <li>22</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="artifact__narrative blur" id="nar1">
                                <p>This is a prototype website for a fictional online store, created in Figma for my ‘UI/UX Strategy’ course. The goal with this artifact is to demonstrate an understanding of core UI principles, and competent use of this popular prototyping tool.</p>
                            </div>
                            <div class="artifact__image" id="pic1">
                                <img src="images/arti-4-1.jpg" alt="">
                            </div>
                            <div class="artifact__narrative blur" id="nar2">
                                <p>For this project, students were assigned to prototype a website for an imaginary business. My idea was inspired by sites like motionloops.com or storyblocks.com that sell stock footage and motion loops for performers and creators. As per the assignment, user personas, user stories and a flow chart were created to demonstrate the student’s understanding of information architecture.</p>
                            </div>
                            <div class="artifact__image" id="pic2">
                                <img src="images/arti-4-2.jpg" alt="">
                            </div>
                            <div class="artifact__narrative blur" id="nar3">
                                <p>I generated lo-fi wireframes in Figma for each of the pages that would be required to complete my user flows. Using Figma’s prototyping tools, I built out the functionality needed to navigate the site. The user flows I created for testing included adding various items to the shopping cart, and completing a transaction.</p>
                            </div>
                            <div class="artifact__image" id="pic3">
                                <img src="images/arti-4-3.jpg" alt="">
                            </div>
                            <div class="artifact__narrative blur" id="nar4">
                                <p>I went with a design aesthetic I felt was reminiscent of old sci-fi comic books. I used Adobe Illustrator to quickly design a logo. Heavyweight display font ‘FatFrank’ was used for logotype and headings. Blender 3D & Photoshop were used to generate product mock-ups. Some UI kits were used navigation and social icons, as well as my check-out and payment screens. Other UI elements were generated in Figma.</p>
                            </div>
                            <div class="artifact__image" id="pic4">
                                <img src="images/arti-4-4.jpg" alt="">
                            </div>
                            <div class="artifact__narrative blur" id="nar5">
                                <p>My completed prototype was then shared with my testing team via the online testing tool Maze.co. Test results revealed a smooth and intuitive experience for most users - heat maps showed that my testers found the primary path with very few extra clicks. A couple of minor hang-ups were addressed during revisions, including giving more descriptive names to some of my links.</p>
                            </div>
                            <div class="artifact__cta flex">
                                <a href="https://www.figma.com/proto/TMGMZmhVcaoyeiNHI1t61i/DomepieceMedia?node-id=2%3A4&starting-point-node-id=2%3A4&scaling=scale-down" target="_blank"><button class="btn-1"><h3>View The Project</h3></button></a>
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