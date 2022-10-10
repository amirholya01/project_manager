<?php
    $connPath = "dbconn.php";
    while(!file_exists($connPath)){
        $connPath = "../$connPath";
    }
    require $connPath;


    $name = $_POST['name'];
    $password = $_POST['password'];

    $sql = "SELECT name, password FROM users WHERE name='$name' AND password='$password'"; /* <-- Model */

    $data = $pdo->query($sql)->fetchAll();
    
    if($data[0]['name']){
        //login
        $_SESSION["name"] = $data[0]['name'];
        $_SESSION["loggedin"] = "true";

        header("Location:/$URL/index.php");
    }else{
        header("Location: /$URL/views/login/login.php?err=wronginfo");
    }
