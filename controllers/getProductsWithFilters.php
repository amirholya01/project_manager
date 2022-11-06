<?php
    // Default Name to wildcard (Wildcard = Select everything)
    $search = "%";

    /* 
        We need to check if we are searching for types because we have to use different
        queries depending on if we search for it or not
    */
    if( isset( $_POST['type'] ) && $_POST['type'] != '' ){
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
        $type = $_POST['type'];
        $getProducts->bindParam(':type', $type);
    }else{
        /* 
            This is basicly just a copy paste of the above code with minor changes
        */
        if( isset( $_POST['id'] ) && $_POST['id'] != ""){
            $id = $_POST['id'];
            $getProducts = $pdo->prepare($Products->getProductsDynamicSearchWithoutType);
            $getProducts->bindParam(':id', $id);
        }else{
            $getProducts = $pdo->prepare($Products->getProductsDynamicSearchWithoutIdAndType);
        }
    }
    
    if ( isset( $_POST['search'] ) ){
        $search = "%" . $_POST['search'] . "%";
    }
    $getProducts->bindParam(':search', $search);    
    $getProducts->execute();
    
    $data = $getProducts->fetchAll();