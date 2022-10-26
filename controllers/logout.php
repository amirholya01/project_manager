<?php    
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }
    require $rootPath . "dbconn.php";
    

    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == "true"){
        $_SESSION["name"] = $data[''];
        $_SESSION["loggedin"] = "false";
        header("Location:/");
    }


