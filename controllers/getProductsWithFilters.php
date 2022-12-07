<?php
    /* 🔥 Should be saniticed */
    $data = $ProductsHandler->getProducts(
        isset($_POST['search']) ? $_POST['search'] : "",
        isset($_POST['id']) ? $_POST['id'] : "",
        isset($_POST['type']) ? $_POST['type'] : ""
    );

    /* echo "MEEEP";
    echo $_POST['search'];
    echo $_POST['id'];
    echo $_POST['type']; */