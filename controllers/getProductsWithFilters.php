<?php
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }
    require_once $rootPath . "models/handlers/ProductsHandler.php";
    
    $ProductsH->getProducts(
        isset($_POST['search']) ? $_POST['search'] : "", 
        isset($_POST['id']) ? $_POST['id'] : "", 
        isset($_POST['type']) ? $_POST['type'] : ""
    );