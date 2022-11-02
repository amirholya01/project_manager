<?php
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }
    require $rootPath . "models/users.php";

    $sql = "SELECT * FROM users WHERE name LIKE :name ";
    $name = "%";
    if( isset( $args[0] ) && $args[0] != ""){
        $id = $args[0];
        $getUsers = $pdo->prepare("SELECT * FROM users WHERE name LIKE :name AND user_id = :id");
        $getUsers->bindParam(':id', $id);
        echo $id;
    }else{
        $getUsers = $pdo->prepare($sql);
    }
    if ( isset( $args[1] ) ){
        $name = "%" . $args[1] . "%";
    }
    $getUsers->bindParam(':name', $name);    
    $getUsers->execute();
    
    $data = $getUsers->fetchAll();