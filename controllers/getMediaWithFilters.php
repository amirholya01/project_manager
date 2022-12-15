<?php
    if(isset($_POST['name'])){
        $name = $inputSanitation->sanitice($_POST('name'));
    }else{
        $name = "";
    }

    $validStrings = $inputSanitation->getValidationStatus();
    
    if($validStrings == true){
        $data = $ProductsHandler->getMedia(
            $name
        );
    }