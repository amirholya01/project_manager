<?php

$rootPath = "";
while(!file_exists($rootPath . "index.php")){
    $rootPath = "../$rootPath";
}

require_once $rootPath . "security/inputSanitation.php";

$inputSanitation->numberSanitice($_POST['id']);

$validStrings = $inputSanitation->getValidationStatus();

if($validStrings == true){
    $newCart = array();
    
    /* remove $_POST['id'] from $_SESSION['cart'] */
    foreach($_SESSION['cart'] as $cart){
        if($cart['product'] != $_POST['id']){
            array_push($newCart, $cart);
        }
    }
    
    $_SESSION['cart'] = $newCart;
}

?>

<script>
    window.history.go(-1);
</script>