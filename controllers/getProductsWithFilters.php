<?php

    if(isset($_POST['search'])){
        $search = $inputSanitation->sanitice($_POST['search']);
    }else{
        $search = "";
    }

    if(isset($_POST['id'])){
        $id = $inputSanitation->sanitice($_POST['id']);
    }else{
        $id = "";
    }

    if(isset($_POST['type'])){
        $type = $inputSanitation->sanitice($_POST['type']);
    }else{
        $type = "";
    }

    $validStrings = $inputSanitation->getValidationStatus();

    
    /* Editing images on sales makes something not pass sanitation so we put a default */
    if($validStrings == false){
        $data = $ProductsHandler->getProducts("", "", "");
    }

    if($validStrings == true){
        $data = $ProductsHandler->getProducts(
            $search,
            $id,
            $type
        );
        
        
    }