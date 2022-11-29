<?php
    $data = $ProductsHandler->getMedia(
        isset($_POST['name']) ? $_POST['name'] : "",
        isset($_POST['type']) ? $_POST['type'] : ""
    );