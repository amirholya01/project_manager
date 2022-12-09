<?php

$dataset = $FrontpageHandler->getFrontpage();

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

$aboutUs = '';

$contactSubtitle = '';
$contactTitle = '';

foreach($dataset as $data){
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
    if($data['id'] == 'aboutusTitle'){
        $aboutusTitle = $data['text'];
    }
    if($data['id'] == 'aboutUs'){
        $aboutUs = $data['text'];
    }
    if($data['id'] == 'contactSubtitle'){
        $contactSubtitle = $data['text'];
    }
    if($data['id'] == 'contactTitle'){
        $contactTitle = $data['text'];
    }
}