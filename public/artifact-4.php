<?php

    // import the init page
    require('../db/init.php');

    // declare a variable that executes the find_all function on the Note class
    $artifact = Artifact::find_by_id(4);

    

?><!DOCTYPE html>
<html lang="en" data-barba="wrapper">
 
    <?php 
        $title = "Domepiece Media";
        $description = "This high fidelity mockup of an online store demonstrates my competence with prototyping tool Figma. Applied skills include UI/UX design, 3D Modelling.";
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