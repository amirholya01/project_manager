<?php

if(isset($_POST['aboutUs'])){
    $aboutUs = $stringSanitation->sanitice($_POST['aboutUs']);

    $validStrings = $stringSanitation->getValidationStatus();

    if($validStrings == true){
        $update = $FrontpageHandler->editAboutUs($aboutUs);
    }
}
