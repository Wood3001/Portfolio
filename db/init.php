<?php 
    
    define('WWW_ROOT', 'http://localhost');
    define('PROJECT_ROOT', dirname(__DIR__, 1));

    // Add Database Constants
    // ----------
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', 'root');
    define('DB_NAME', 'portfolio1');

    // Include functions
    require('functions.php');

    // Include classes
    require(get_path('/db/Classes/Artifact.php'));

    // Connect to the database
    // ----------
    $db = db_connect();

    // Set the database for the Artifact class
    Artifact::set_db($db);