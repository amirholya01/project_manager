<?php
    /* 🔥 Should be saniticed */
    $data = $NewsHandler->getNews(
        isset($_POST['title']) ? $_POST['title'] : ""
    );