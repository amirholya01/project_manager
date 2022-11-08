<?php
    /* 📒 */

if( isset( $_POST['createProduct'] ) ){
    $name = $_POST['createName'];
    $type = $_POST['createType'];
    $description = $_POST['createDescription'];
    $price = $_POST['createPrice'];

    $createProduct = $pdo->prepare($Products->createProduct);
    $createProduct->bindParam(':name', $name);
    $createProduct->bindParam(':type', $type);
    $createProduct->bindParam(':description', $description);
    $createProduct->bindParam(':price', $price);
    $createProduct->execute();
}
