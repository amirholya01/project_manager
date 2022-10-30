<?php
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }
    require $rootPath . "models/users.php";

    $name = "%";
    if( isset( $_GET['name'] ) ){
        $name = "%" . $_GET['name'] . "%";
    }
    

    $getUsers = $pdo->prepare("SELECT * FROM users WHERE name LIKE :name;");
    $getUsers->bindParam(':name', $name);
    $getUsers->execute();
    
    $data = $getUsers->fetchAll();