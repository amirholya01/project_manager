<?php
    if(isset($_POST['name'])){
        $name = $inputSanitation->sanitice($_POST ('name'));
    }

    $validStrings = $inputSanitation->getValidationStatus();
    
    if($validStrings == true){
        $data = $ProductsHandler->getMedia(
            isset($_POST['name']) ? $name : ""
        );
    }