<?php

    // import the init page
    require('../db/init.php');

    // declare a variable that executes the find_all function on the Note class
    $artifact = Artifact::find_by_id(2);

    

?><!DOCTYPE html>
<html lang="en" data-barba="wrapper">
 
    <?php 
        $title = "JavaScript Guide";
        $description = "This project demonstrates implementation of the JavaScript libraries and plug-ins including jQuery and FullPage.js. Core JS concepts are explained.";
        $stylesheet = "styles/artifact-2.css";
        require('partials/global/head.php');
    ?>

        <body>

        <?php require('partials/global/header.php'); ?>

        <main class="overflow-container" data-barba="container" data-barba-namespace="art-2">
        
            <?php include(get_path('public/partials/global/artifact.php')); ?>

            <div class="blackout"></div>
        </main> 

        <?php require('partials/global/scripts.php'); ?>
        
    </body>
</html>