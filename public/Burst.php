<?php

    // import the init page
    require('../db/init.php');

    // declare a variable that executes the find_all function on the Note class
    $artifact = Artifact::find_by_id(8);

    

?><!DOCTYPE html>
<html lang="en" data-barba="wrapper">
 
    <?php 
        $title = "Burst Creative Group";
        $description = "The culmination of my education at BCIT was an internship at this thriving local agency.";
        $stylesheet = "styles/Burst.css";
        require('partials/global/head.php');
    ?>

    <body>

        <?php require('partials/global/header.php'); ?>
        <?php require('partials/global/background.php'); ?>
        
        <?php include(get_path('public/partials/global/artifact.php')); ?>

        <?php require('partials/global/scripts.php'); ?>
        
    </body>
</html>