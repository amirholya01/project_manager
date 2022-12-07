<?php
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }
    require_once $rootPath . "public/dbconn.php";

    require_once $rootPath . "models/handlers/Usershandler.php";
    require_once $rootPath . "security/adminCheck.php";

    require_once $rootPath . "models/handlers/newsHandler.php";
    
    require_once $rootPath . "security/formSpam.php";
    require_once $rootPath . "security/stringSanitation.php";

    require_once $rootPath . "controllers/createNews.php";
    require_once $rootPath . "controllers/editNews.php";
    require_once $rootPath . "controllers/deleteNews.php";

    require_once $rootPath . "controllers/getNewsWithFilters.php";

    require_once $rootPath . "views/backend/partials/header.php";

    /* This is to make so search data dosent disapear after search */
    $id = null;
    if(isset($_POST['id'])){
        $id = $_POST['id'];
    }
    $search = null;
    if(isset($_POST['search'])){
        $search = $_POST['search'];
    }
    $searchType = null;
    if(isset($_POST['type'])){
        $searchType = $_POST['type'];
    }
    $page = 0;
    if(isset($_POST['page'])){
        $page = $_POST['page'];
    }
?>

<div class="wrapper">


















</div>
