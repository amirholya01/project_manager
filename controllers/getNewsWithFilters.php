<?php
    /* 🔥 Should be saniticed */
    $data = $NewsHandler->getNews(
        isset($_POST['search']) ? $_POST['search'] : ""
    );