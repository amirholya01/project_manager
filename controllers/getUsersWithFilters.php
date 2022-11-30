<?php
    /* 🔥 Should be saniticed */
    $data = $UsersHandler->getUsers(
        isset($_POST['id']) ? $_POST['id'] : "",
        isset($_POST['role']) ? $_POST['role'] : "",
        isset($_POST['name']) ? $_POST['name'] : ""
    );