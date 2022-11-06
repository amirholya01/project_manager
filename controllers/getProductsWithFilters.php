<?php
    // Default Name to wildcard (Wildcard = Select everything)
    $search = "%";

    /* 
        We can't use a wildcard on an int(id) so we have to structure the query
        differently depending on weather we have an id or not
    */
    if( isset( $_POST['id'] ) && $_POST['id'] != ""){
        $id = $_POST['id'];
        $getProducts = $pdo->prepare($Products->getProductsDynamicSearch);
        $getProducts->bindParam(':id', $id);
    }else{
        $getProducts = $pdo->prepare($Products->getProductsDynamicSearchWithoutId);
    }
    
    if ( isset( $_POST['search'] ) ){
        $search = "%" . $_POST['search'] . "%";
    }
    $getProducts->bindParam(':search', $search);    
    $getProducts->execute();
    
    $data = $getProducts->fetchAll();