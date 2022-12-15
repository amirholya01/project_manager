<?php

    if(isset($_POST['id'])){
        $id = $inputSanitation->sanitice($_POST['id']);
    }else{
        $id = null;
    }
    
    if(isset($_POST['role'])){
        $role = $inputSanitation->sanitice($_POST['role']);
    }else{
        $role = null;
    }
    
    if(isset($_POST['name'])){
        $name = $inputSanitation->sanitice($_POST['name']);
    }else{
        $name = null;
    }

    $validStrings = $inputSanitation->getValidationStatus();

    if($validStrings == true){    
        $data = $UsersHandler->getUsers(
            isset($_POST['id']) ? $id : "",
            isset($_POST['role']) ? $role : "",
            isset($_POST['name']) ? $name : ""
        );
    }