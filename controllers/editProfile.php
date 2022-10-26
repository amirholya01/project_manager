<?php
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }
    require $rootPath . "views/partials/header.php";


    $currentName = $_SESSION['name'];

    $name = $_POST['name'];
    $password = $_POST['password'];

    $nameCheckSql = "SELECT name FROM users WHERE name='$name'"; /* <-- Model */

    $data = $pdo->query($nameCheckSql)->fetchAll();

    $validName = true;
    if($data[0]['name']){
        $validName = false;
    }
    if($data[0]['name'] == $currentName){
        $validName = true;
    }

    if($name != "" && $validName){
        if($password != ""){
            $sql = "UPDATE users SET name = '$name', password = '$password' WHERE name = '$currentName'"; /* <-- Model */
        }else{
            $sql = "UPDATE users SET name = '$name' WHERE name = '$currentName'"; /* <-- Model */
        }
    
        $pdo->query($sql);
    
        $_SESSION['name'] = $name;
    
        header("Location: /");
    }else{
        header("Location: /profile?err=nameempty");
    }
