<?php

    if(isset($_POST['id'])){
        $id = $inputSanitation->sanitice($_POST['id']);
    }else{
        $id = "";
    }
    
    if(isset($_POST['role'])){
        $role = $inputSanitation->sanitice($_POST['role']);
    }else{
        $role = "";
    }
    
    if(isset($_POST['name'])){
        $name = $inputSanitation->sanitice($_POST['name']);
    }else{
        $name = "";
    }

    $validStrings = $inputSanitation->getValidationStatus();

    $data = array();

    if($validStrings == true){    
        $data = $UsersHandler->getUsers(
            $id,
            $role,
            $name
        );
    }