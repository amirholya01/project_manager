<?php
    // Default Name to wildcard (Wildcard = Select everything)
    $name = "%";

    /* 
        We can't use a wildcard on an int(id) so we have to structure the query
        differently depending on weather we have an id or not
    */
    if( isset( $_POST['id'] ) && $_POST['id'] != ""){
        $id = $_POST['id'];
        $getUsers = $pdo->prepare($Users->getUsersByIdAndName);
        $getUsers->bindParam(':id', $id);
    }else{
        $getUsers = $pdo->prepare($Users->getUsersByName);
    }
    
    if ( isset( $_POST['name'] ) ){
        $name = "%" . $_POST['name'] . "%";
    }
    $getUsers->bindParam(':name', $name);    
    $getUsers->execute();
    
    $data = $getUsers->fetchAll();