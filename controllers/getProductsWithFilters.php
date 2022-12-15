<?php

    if(isset($_POST['search'])){
        $search = $inputSanitation->sanitice($_POST['search']);
    }else{
        $search = null;
    }

    if(isset($_POST['id'])){
        $id = $inputSanitation->sanitice($_POST['id']);
    }else{
        $id = null;
    }

    if(isset($_POST['type'])){
        $type = $inputSanitation->sanitice($_POST['type']);
    }else{
        $type = null;
    }

    $validStrings = $inputSanitation->getValidationStatus();

    if($validStrings == true){
        $data = $ProductsHandler->getProducts(
            isset($_POST['search']) ? $search : "",
            isset($_POST['id']) ? $id : "",
            isset($_POST['type']) ? $type : ""
        );
    }