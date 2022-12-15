<?php

$rootPath = "";
while(!file_exists($rootPath . "index.php")){
    $rootPath = "../$rootPath";
}

require_once $rootPath . "public/dbconn.php";

require_once $rootPath . "models/handlers/UsersHandler.php";
require_once $rootPath . "security/adminCheck.php";

require_once $rootPath . "security/formSpam.php";
require_once $rootPath . "security/inputSanitation.php";

require_once $rootPath . "models/handlers/FrontpageHandler.php";
require_once $rootPath . "models/handlers/ProductsHandler.php";

require_once $rootPath . "controllers/adminFrontpage.php";

/* Banner1 section Handlers */
if(isset($_POST['bannerSubtitle1'])){
    $text = $inputSanitation->sanitice($_POST['bannerSubtitle1']);

    $validStrings = $inputSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editBannerSubtitle1($text);
    }
}

if(isset($_POST['bannerTitle1'])){
    $text = $inputSanitation->sanitice($_POST['bannerTitle1']);

    $validStrings = $inputSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editBannerTitle1($text);
    }
}

if(isset($_POST['banner1Slogan1'])){
    $text = $inputSanitation->sanitice($_POST['banner1Slogan1']);

    $validStrings = $inputSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editBanner1Slogan1($text);
    }
}

if(isset($_POST['banner1Slogan2'])){
    $text = $inputSanitation->sanitice($_POST['banner1Slogan2']);

    $validStrings = $inputSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editBanner1Slogan2($text);
    }
}

if(isset($_POST['banner1Slogan3'])){
    $text = $inputSanitation->sanitice($_POST['banner1Slogan3']);

    $validStrings = $inputSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editBanner1Slogan3($text);
    }
}

if(isset($_POST['bannerText1'])){
    $text = $inputSanitation->sanitice($_POST['bannerText1']);

    $validStrings = $inputSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editBannerText1($text);
    }
}

if(isset($_POST['bannerImageOne'])){
    print_r($_POST['bannerImageOne']);
    $text = $inputSanitation->sanitice($_POST['bannerImageOne']);

    $validStrings = $inputSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editBannerImageOne($text);
    }
}
/* Banner1 section Handlers */


/* Banner2 section Handlers */
if(isset($_POST['bannerSubtitle2'])){
    $text = $inputSanitation->sanitice($_POST['bannerSubtitle2']);

    $validStrings = $inputSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editBannerSubtitle2($text);
    }
}

if(isset($_POST['bannerTitle2'])){
    $text = $inputSanitation->sanitice($_POST['bannerTitle2']);

    $validStrings = $inputSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editBannerTitle2($text);
    }
}

if(isset($_POST['banner2Slogan1'])){
    $text = $inputSanitation->sanitice($_POST['banner2Slogan1']);

    $validStrings = $inputSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editBanner2Slogan1($text);
    }
}

if(isset($_POST['banner2Slogan2'])){
    $text = $inputSanitation->sanitice($_POST['banner2Slogan2']);

    $validStrings = $inputSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editBanner2Slogan2($text);
    }
}

if(isset($_POST['banner2Slogan3'])){
    
    $text = $inputSanitation->sanitice($_POST['banner2Slogan3']);

    $validStrings = $inputSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editBanner2Slogan3($text);
    }
}

if(isset($_POST['banner2Text1'])){
    $text = $inputSanitation->sanitice($_POST['banner2Text1']);

    $validStrings = $inputSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editBanner2Text1($text);
    }
}

if(isset($_POST['bannerImageTwo'])){
    $text = $inputSanitation->sanitice($_POST['bannerImageTwo']);

    $validStrings = $inputSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editBannerImageTwo($text);
    }
}
/* Banner2 section Handlers */


/* AboutUS Page section Handlers */
if(isset($_POST['aboutUsImageOne'])){
    $text = $inputSanitation->sanitice($_POST['aboutUsImageOne']);

    $validStrings = $inputSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editAboutUsImageOne($text);
    }
}

if(isset($_POST['aboutPageTitle1'])){
    $text = $inputSanitation->sanitice($_POST['aboutPageTitle1']);

    $validStrings = $inputSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editAboutPageTitle1($text);
    }
}

if(isset($_POST['aboutPageText1'])){
    $text = $inputSanitation->sanitice($_POST['aboutPageText1']);

    $validStrings = $inputSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editAboutPageText1($text);
    }
}

if(isset($_POST['aboutUsImageTwo'])){
    $text = $inputSanitation->sanitice($_POST['aboutUsImageTwo']);

    $validStrings = $inputSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editAboutUsImageTwo($text);
    }
}

if(isset($_POST['aboutPageTitle2'])){
    $text = $inputSanitation->sanitice($_POST['aboutPageTitle2']);

    $validStrings = $inputSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editAboutPageTitle2($text);
    }
}

if(isset($_POST['aboutPageText2'])){
    $text = $inputSanitation->sanitice($_POST['aboutPageText2']);

    $validStrings = $inputSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editAboutPageText2($text);
    }
}

if(isset($_POST['aboutUsImageThree'])){
    $text = $inputSanitation->sanitice($_POST['aboutUsImageThree']);

    $validStrings = $inputSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editAboutUsImageThree($text);
    }
}

if(isset($_POST['aboutPageTitle3'])){
    $text = $inputSanitation->sanitice($_POST['aboutPageTitle3']);

    $validStrings = $inputSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editAboutPageTitle3($text);
    }
}

if(isset($_POST['aboutPageText3'])){
    $text = $inputSanitation->sanitice($_POST['aboutPageText3']);

    $validStrings = $inputSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editAboutPageText3($text);
    }
}


/* AboutUS Page section Handlers */


if(isset($_POST['aboutUs1'])){
    $text = $inputSanitation->sanitice($_POST['aboutUs1']);

    $validStrings = $inputSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editAboutUs1($text);
    }
}

if(isset($_POST['aboutUs2'])){
    $text = $inputSanitation->sanitice($_POST['aboutUs2']);

    $validStrings = $inputSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editAboutUs2($text);
    }
}

if(isset($_POST['phone'])){
    $text = $inputSanitation->sanitice($_POST['phone']);

    $validStrings = $inputSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editPhoneNumber($text);
    }
}

if(isset($_POST['email'])){
    $text = $inputSanitation->sanitice($_POST['email']);

    $validStrings = $inputSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editEmail($text);
    }
}

if(isset($_POST['navHome'])){
    $text = $inputSanitation->sanitice($_POST['navHome']);

    $validStrings = $inputSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editNav1($text);
    }
}

if(isset($_POST['navProducts'])){
    $text = $inputSanitation->sanitice($_POST['navProducts']);

    $validStrings = $inputSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editNav2($text);
    }
}

if(isset($_POST['navAboutUs'])){
    $text = $inputSanitation->sanitice($_POST['navAboutUs']);

    $validStrings = $inputSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editNav3($text);
    }
}

if(isset($_POST['navContact'])){
    $text = $inputSanitation->sanitice($_POST['navContact']);

    $validStrings = $inputSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editNav4($text);
    }
}

if(isset($_POST['productsSubtitle'])){
    $text = $inputSanitation->sanitice($_POST['productsSubtitle']);

    $validStrings = $inputSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editProductsSubTitle($text);
    }
}

if(isset($_POST['productsTitle'])){
    $text = $inputSanitation->sanitice($_POST['productsTitle']);

    $validStrings = $inputSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editProductsTitle($text);
    }
}

if(isset($_POST['aboutusSubtitle'])){
    $text = $inputSanitation->sanitice($_POST['aboutusSubtitle']);

    $validStrings = $inputSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editAboutUsSubTitle($text);
    }
}

if(isset($_POST['aboutusTitle'])){
    $text = $inputSanitation->sanitice($_POST['aboutusTitle']);

    $validStrings = $inputSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editAboutusTitle($text);
    }
}

if(isset($_POST['contactSubtitle'])){
    $text = $inputSanitation->sanitice($_POST['contactSubtitle']);

    $validStrings = $inputSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editContactSubTitle($text);
    }
}

if(isset($_POST['contactTitle'])){
    $text = $inputSanitation->sanitice($_POST['contactTitle']);

    $validStrings = $inputSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editContactTitle($text);
    }
}

if(isset($_POST['address'])){
    $text = $inputSanitation->sanitice($_POST['address']);

    $validStrings = $inputSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editAddress($text);
    }
}

if(isset($_POST['follow'])){
    $text = $inputSanitation->sanitice($_POST['follow']);

    $validStrings = $inputSanitation->getValidationStatus();

    if($validStrings == true){
        $FrontpageHandler->editFollowUs($text);
    }
}

header("location: /adminFrontpage");
