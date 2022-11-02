<?php
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }
    require $rootPath . "models/users.php";

    // Default Name to wildcard (Wildcard = Select everything)
    $name = "%";

    // $args[0] = ID
    /* 
        We can't use a wildcard on an int(id) so we have to structure the query
        differently depending on weather we have an id or not
    */
    if( isset( $args[0] ) && $args[0] != ""){
        $id = $args[0];
        $getUsers = $pdo->prepare("SELECT * FROM users WHERE name LIKE :name AND user_id = :id");
        $getUsers->bindParam(':id', $id);
    }else{
        $getUsers = $pdo->prepare("SELECT * FROM users WHERE name LIKE :name ");
    }

    // $args[1] = Name
    if ( isset( $args[1] ) ){
        $name = "%" . $args[1] . "%";
    }
    $getUsers->bindParam(':name', $name);    
    $getUsers->execute();
    
    $data = $getUsers->fetchAll();