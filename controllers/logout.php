<?php
    $connPath = "dbconn.php";
    while(!file_exists($connPath)){
        $connPath = "../$connPath";
    }
    require $connPath;
    

    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == "true"){
        $_SESSION["name"] = $data[''];
        $_SESSION["loggedin"] = "false";
        header("Location:/$URL/index.php");
    }


