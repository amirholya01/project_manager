<?php    
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }
    require_once $rootPath . "dbconn.php";
    
    /* If logged in then log out and redirect to front page */
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == "true"){
        $_SESSION["name"] = '';
        $_SESSION["loggedin"] = "false";
        header("Location:/");
    }


