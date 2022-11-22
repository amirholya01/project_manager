<?php
    $data = $ProductsHandler->getProducts(
        isset($_POST['search']) ? $_POST['search'] : "",
        isset($_POST['id']) ? $_POST['id'] : "",
        isset($_POST['type']) ? $_POST['type'] : ""
    );