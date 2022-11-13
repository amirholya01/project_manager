<?php
    // Default Name to wildcard (Wildcard = Select everything)
    $name = "%";

    /* 
        We can't use a wildcard on an int(id) so we have to structure the query
        differently depending on weather we have an id or not
    */

    //if id & role
    if( (isset( $_POST['id'] ) && $_POST['id'] != "") && (isset( $_POST['role'] ) && $_POST['role'] != "") ){
        $id = $_POST['id'];
        $role = $_POST['role'];
        $getUsers = $pdo->prepare($Users->getUsersByIdAndNameAndRole);
        $getUsers->bindParam(':id', $id);
        $getUsers->bindParam(':role', $role);
    }else

    //if !id & role    
    if( !(isset( $_POST['id'] ) && $_POST['id'] != "") && (isset( $_POST['role'] ) && $_POST['role'] != "") ){
        $role = $_POST['role'];
        $getUsers = $pdo->prepare($Users->getUsersByNameAndRole);
        $getUsers->bindParam(':role', $role);
    }else

    //if id & !role
    if( (isset( $_POST['id'] ) && $_POST['id'] != "") && !(isset( $_POST['role'] ) && $_POST['role'] != "") ){
        $id = $_POST['id'];
        $getUsers = $pdo->prepare($Users->getUsersByIdAndName);
        $getUsers->bindParam(':id', $id);
    }else
    
    //if !id & !role
    {
        $getUsers = $pdo->prepare($Users->getUsersByName);
    }
    
    if ( isset( $_POST['name'] ) ){
        $name = "%" . $_POST['name'] . "%";
    }
    $getUsers->bindParam(':name', $name);    
    $getUsers->execute();
    
    $data = $getUsers->fetchAll();