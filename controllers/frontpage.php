<?php

$dataset = $FrontpageHandler->getFrontpage();

$bannerSubtitle1 = '';
$bannerTitle1 = '';
$banner1Slogan1 = '';
$banner1Slogan2 = '';
$banner1Slogan3 = '';
$bannerText1 = '';

$bannerSubtitle2 = '';
$bannerTitle2 = '';
$bannerSlogan2 = '';
$banner2Text1 = '';

$phone = '';
$follow = '';
$email = '';
$address = '';

$nav1 = '';
$nav2 = '';
$nav3 = '';
$nav4 = '';

$productsSubtitle = '';
$productsTitle = '';

$aboutusSubtitle = '';
$aboutusTitle = '';
$aboutusSlogan = '';
$aboutUs2 = '';


$aboutUs1 = '';

$contactSubtitle = '';
$contactTitle = '';

foreach($dataset as $data){

    /* Banner1 section Handlers */
    if($data['id'] == 'bannerSubtitle1'){
        $bannerSubtitle1 = $data['text'];
    }
    if($data['id'] == 'bannerTitle1'){
        $bannerTitle1 = $data['text'];
    }
    if($data['id'] == 'banner1Slogan1'){
        $banner1Slogan1 = $data['text'];
    }
    if($data['id'] == 'banner1Slogan2'){
        $banner1Slogan2 = $data['text'];
    }
    if($data['id'] == 'banner1Slogan2'){
        $banner1Slogan3 = $data['text'];
    }
    if($data['id'] == 'bannerText1'){
        $bannerText1 = $data['text'];
    }

    /* Banner2 section Handlers */
    if($data['id'] == 'bannerSubtitle2'){
        $bannerSubtitle2 = $data['text'];
    }
    if($data['id'] == 'bannerTitle2'){
        $bannerTitle2 = $data['text'];
    }
    if($data['id'] == 'bannerSlogan2'){
        $bannerSlogan2 = $data['text'];
    }
    if($data['id'] == 'banner2Text1'){
        $banner2Text1 = $data['text'];
    }

    if($data['id'] == 'phone'){
        $phone = $data['text'];
    }
    if($data['id'] == 'follow'){
        $follow = $data['text'];
    }
    if($data['id'] == 'email'){
        $email = $data['text'];
    }
    if($data['id'] == 'address'){
        $address = $data['text'];
    }
    if($data['id'] == 'nav1'){
        $nav1 = $data['text'];
    }
    if($data['id'] == 'nav2'){
        $nav2 = $data['text'];
    }
    if($data['id'] == 'nav3'){
        $nav3 = $data['text'];
    }
    if($data['id'] == 'nav4'){
        $nav4 = $data['text'];
    }
    if($data['id'] == 'productsSubtitle'){
        $productsSubtitle = $data['text'];
    }
    if($data['id'] == 'productsTitle'){
        $productsTitle = $data['text'];
    }
    if($data['id'] == 'aboutusSubtitle'){
        $aboutusSubtitle = $data['text'];
    }
    if($data['id'] == 'aboutusSlogan'){
        $aboutusSlogan = $data['text'];
    }
    if($data['id'] == 'aboutusTitle'){
        $aboutusTitle = $data['text'];
    }
    if($data['id'] == 'aboutUs1'){
        $aboutUs1 = $data['text'];
    }
    if($data['id'] == 'aboutUs2'){
        $aboutUs2 = $data['text'];
    }
    if($data['id'] == 'contactSubtitle'){
        $contactSubtitle = $data['text'];
    }
    if($data['id'] == 'contactTitle'){
        $contactTitle = $data['text'];
    }
}