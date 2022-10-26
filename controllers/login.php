<?php
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }
    require $rootPath . "dbconn.php";


    $name = $_POST['name'];
    $password = $_POST['password'];

    $sql = "SELECT name, password FROM users WHERE name='$name' AND password='$password'"; /* <-- Model */

    $data = $pdo->query($sql)->fetchAll();
    
    if($data[0]['name']){
        //login
        $_SESSION["name"] = $data[0]['name'];
        $_SESSION["loggedin"] = "true";

        header("Location:/");
    }else{
        header("Location: /login?err=wronginfo");
    }
