<?php

    // import the init page
    require('../db/init.php');

    // declare a variable that executes the find_all function on the Note class
    $artifact = Artifact::find_by_id(3);

    

?><!DOCTYPE html>
<html lang="en" data-barba="wrapper">
 
    <?php 
        $title = "Grid Escape";
        $description = "This project demonstrates use of conditional logic to create a simple game. GSAP plugin Draggable is implemented to facilitate movement.";
        $stylesheet = "styles/artifact-3.css";
        require('partials/global/head.php');
    ?>

        <body>

        <?php require('partials/global/header.php'); ?>

        <main>
        
            <?php include(get_path('public/partials/global/artifact.php')); ?>

            <div class="blackout"></div>
        </main> 

        <?php require('partials/global/scripts.php'); ?>
        
    </body>
</html>