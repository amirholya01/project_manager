<?php
    if(isset($_POST['search'])){
        $search = $inputSanitation->sanitice($_POST['search']);
    }else{
        $search = "";
    }

    $validStrings = $inputSanitation->getValidationStatus();

    if($validStrings == true){
        $data = $NewsHandler->getNews(
            $search
        );
    }