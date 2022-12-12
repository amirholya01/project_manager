<?php

/* Banner1 section Handlers */
if(isset($_POST['bannerSubtitle1'])){
    $text = $stringSanitation->sanitice($_POST['bannerSubtitle1']);

    $validStrings = $stringSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editBannerSubtitle1($text);
    }
}

if(isset($_POST['bannerTitle1'])){
    $text = $stringSanitation->sanitice($_POST['bannerTitle1']);

    $validStrings = $stringSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editBannerTitle1($text);
    }
}

if(isset($_POST['banner1Slogan1'])){
    $text = $stringSanitation->sanitice($_POST['banner1Slogan1']);

    $validStrings = $stringSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editBanner1Slogan1($text);
    }
}

if(isset($_POST['banner1Slogan2'])){
    $text = $stringSanitation->sanitice($_POST['banner1Slogan2']);

    $validStrings = $stringSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editBanner1Slogan2($text);
    }
}

if(isset($_POST['banner1Slogan3'])){
    $text = $stringSanitation->sanitice($_POST['banner1Slogan3']);

    $validStrings = $stringSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editBanner1Slogan3($text);
    }
}

if(isset($_POST['bannerText1'])){
    $text = $stringSanitation->sanitice($_POST['bannerText1']);

    $validStrings = $stringSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editBannerText1($text);
    }
}
/* Banner1 section Handlers */


/* Banner2 section Handlers */
if(isset($_POST['bannerSubtitle2'])){
    $text = $stringSanitation->sanitice($_POST['bannerSubtitle2']);

    $validStrings = $stringSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editBannerSubtitle2($text);
    }
}

if(isset($_POST['bannerTitle2'])){
    $text = $stringSanitation->sanitice($_POST['bannerTitle2']);

    $validStrings = $stringSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editBannerTitle2($text);
    }
}

if(isset($_POST['bannerSlogan2'])){
    $text = $stringSanitation->sanitice($_POST['bannerSlogan2']);

    $validStrings = $stringSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editBannerSlogan2($text);
    }
}

if(isset($_POST['banner2Text1'])){
    $text = $stringSanitation->sanitice($_POST['banner2Text1']);

    $validStrings = $stringSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editBanner2Text1($text);
    }
}

/* Banner2 section Handlers */


if(isset($_POST['aboutUs1'])){
    $text = $stringSanitation->sanitice($_POST['aboutUs1']);

    $validStrings = $stringSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editAboutUs1($text);
    }
}

if(isset($_POST['aboutUs2'])){
    $text = $stringSanitation->sanitice($_POST['aboutUs2']);

    $validStrings = $stringSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editAboutUs2($text);
    }
}

if(isset($_POST['phone'])){
    $text = $stringSanitation->sanitice($_POST['phone']);

    $validStrings = $stringSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editPhoneNumber($text);
    }
}

if(isset($_POST['email'])){
    $text = $stringSanitation->sanitice($_POST['email']);

    $validStrings = $stringSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editEmail($text);
    }
}

if(isset($_POST['navHome'])){
    $text = $stringSanitation->sanitice($_POST['navHome']);

    $validStrings = $stringSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editNav1($text);
    }
}

if(isset($_POST['navProducts'])){
    $text = $stringSanitation->sanitice($_POST['navProducts']);

    $validStrings = $stringSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editNav2($text);
    }
}

if(isset($_POST['navAboutUs'])){
    $text = $stringSanitation->sanitice($_POST['navAboutUs']);

    $validStrings = $stringSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editNav3($text);
    }
}

if(isset($_POST['navContact'])){
    $text = $stringSanitation->sanitice($_POST['navContact']);

    $validStrings = $stringSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editNav4($text);
    }
}

if(isset($_POST['productsSubtitle'])){
    $text = $stringSanitation->sanitice($_POST['productsSubtitle']);

    $validStrings = $stringSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editProductsSubTitle($text);
    }
}

if(isset($_POST['productsTitle'])){
    $text = $stringSanitation->sanitice($_POST['productsTitle']);

    $validStrings = $stringSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editProductsTitle($text);
    }
}

if(isset($_POST['aboutusSubtitle'])){
    $text = $stringSanitation->sanitice($_POST['aboutusSubtitle']);

    $validStrings = $stringSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editAboutUsSubTitle($text);
    }
}

if(isset($_POST['aboutusTitle'])){
    $text = $stringSanitation->sanitice($_POST['aboutusTitle']);

    $validStrings = $stringSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editAboutusTitle($text);
    }
}

if(isset($_POST['contactSubtitle'])){
    $text = $stringSanitation->sanitice($_POST['contactSubtitle']);

    $validStrings = $stringSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editContactSubTitle($text);
    }
}

if(isset($_POST['contactTitle'])){
    $text = $stringSanitation->sanitice($_POST['contactTitle']);

    $validStrings = $stringSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editContactTitle($text);
    }
}

if(isset($_POST['address'])){
    $text = $stringSanitation->sanitice($_POST['address']);

    $validStrings = $stringSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editAddress($text);
    }
}

if(isset($_POST['follow'])){
    $text = $stringSanitation->sanitice($_POST['follow']);

    $validStrings = $stringSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editFollowUs($text);
    }
}