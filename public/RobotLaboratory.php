<?php

    // import the init page
    require('../db/init.php');

    // declare a variable that executes the find_all function on the Note class
    $artifact = Artifact::find_by_id(1);

    

?><!DOCTYPE html>
<html lang="en" data-barba="wrapper">
 
    <?php 
        $title = "Robot Laboratory";
        $description = "This project demonstrates my understanding and implementation of JavaScript libraries including jQuery and GSAP. Skills applied include conditional logic, SVG animation and vector illustration.";
        $stylesheet = "styles/artifact-1.css";
        require('partials/global/head.php');
    ?>

    <body>

        <?php require('partials/global/header.php'); ?>
        <?php require('partials/global/background.php'); ?>
        
        <?php include(get_path('public/partials/global/artifact.php')); ?>

        <?php require('partials/global/scripts.php'); ?>
        
    </body>
</html>