<?php

$newCart = array();

// needs $_POST['quantity']

$inputSanitation->numberSanitice($_POST['id']);
$inputSanitation->numberSanitice($_POST['quantity']);

$validStrings = $inputSanitation->getValidationStatus();

if($validStrings == true){
    /* remove $_POST['id'] from $_SESSION['cart'] */
    foreach($_SESSION['cart'] as $cart){
        if($cart['product'] != $_POST['id']){
            array_push($newCart, $cart);
        }elseif($_POST['quantity'] > 0){
            $cart['quantity'] = $_POST['quantity'];
            array_push($newCart, $cart);
        }
    }
    
    $_SESSION['cart'] = $newCart;
}

?>

<script>
    //This works
    window.history.go(-1);
</script>