<?php
    /* 🔥 Should be saniticed */
    $data = $ProductsHandler->getMedia(
        isset($_POST['name']) ? $_POST['name'] : ""
    );