<?php

    // import the init page
    require('../db/init.php');

    // declare a variable that executes the find_all function on the Note class
    $artifact = Artifact::find_by_id(6);

    

?><!DOCTYPE html>
<html lang="en" data-barba="wrapper">
 
    <?php 
        $title = "Opus-Space";
        $description = "A single-page website for a fictional multimedia production company.";
        $stylesheet = "styles/OpusSpace.css";
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