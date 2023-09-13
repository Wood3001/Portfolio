<?php

    // import the init page
    require('../db/init.php');

    // declare a variable that executes the find_all function on the Note class
    $artifact = Artifact::find_by_id(5);

    

?><!DOCTYPE html>
<html lang="en" data-barba="wrapper">
 
    <?php 
        $title = "3D Wienermobile";
        $description = "This is a 3D model I created in Blender3D, rendered for browsers in WebGL using JavaScript library Three.js.";
        $stylesheet = "styles/3DWiendermobile.css";
        require('partials/global/head.php');
    ?>

        <body>

        <?php require('partials/global/header.php'); ?>
        <?php require('partials/global/background.php'); ?>

        <main>
        
            <?php include(get_path('public/partials/global/artifact.php')); ?>

            <div class="blackout"></div>
        </main> 

        <?php require('partials/global/scripts.php'); ?>
        
    </body>
</html>