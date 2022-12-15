<?php
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }

    if($_POST == array()){
        $_POST = $_SESSION["savedPost"]['adminMedia'];
    }else{
        $_SESSION["savedPost"]['adminMedia'] = $_POST;
    }

    require_once $rootPath . "public/dbconn.php";

    require_once $rootPath . "models/handlers/productsHandler.php";
    require_once $rootPath . "models/handlers/Usershandler.php";

    require_once $rootPath . "security/adminCheck.php";
    require_once $rootPath . "security/formSpam.php";
    require_once $rootPath . "security/inputSanitation.php";

    require_once $rootPath . "controllers/imageUpload.php";

    //require_once $rootPath . "controllers/createMedia.php";
    require_once $rootPath . "controllers/editMedia.php";
    //require_once $rootPath . "controllers/deleteMedia.php";

    require_once $rootPath . "controllers/getMediaWithFilters.php";

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
    if($_SESSION['pageNrName'] != 'media'){
        $_SESSION['pageNr'] = 0;
    }elseif(isset($_POST['page'])){
        if($_SESSION['pageNrName'] == 'media'){
            $page = $_POST['page'];
            $_SESSION['pageNr'] = $page;
        }
    }else{
        if($_SESSION['pageNrName'] == 'media'){
            $page = $_SESSION['pageNr'];
        }
    }
    $_SESSION['pageNrName'] = 'media';
?>
<div class="wrapper">


    <form class="Admin-handlers" method="POST" action="/adminMedia">

        <div class="Admin-search-product">
            <!-- ✒️ Make it not case sensitive -->
            <input class="input" type="text" name="name" placeholder="Name">
            <input class="height-button button submit" type="submit" value="Search">
        </div>

        <div class="Reset_create_div">
            <a class="button" href="/adminMedia">Reset</a>
            <a class="button" href="/adminCreateMedia">Create new media</a>
        </div>
    </form>

  



    <?php
        $pageNr = $page;
        $MediaPrPage = 12;
        $pageMinIndex = $pageNr * $MediaPrPage;
        $pageMaxIndex = $pageMinIndex + $MediaPrPage;
    ?>    


    <div class="Admin-page-title">
        <h1>Media</h1>
    </div>

<div class="wrapper-main-area">

    <?php
        /* Previous button */
        if($page > 0){
    ?>
        <form method="POST" action="adminMedia">
            <input type="hidden" name="id" value="<?php echo ($id != null) ? $id : ""; ?>">
            <input type="hidden" name="search" value="<?php echo ($search != null) ? $search : ""; ?>">
            <input type="hidden" name="type" value="<?php echo ($searchType != null) ? $searchType : ""; ?>">
            <input type="hidden" name="page" value="<?php echo ($page - 1) ?>">
            <input class="Prev-button button-pagination" type="submit" value="Prev">
        </form>
    <?php
        }
    ?>

    <?php
        /* Next button */
        if($page < (count($data) / $MediaPrPage) - 1){
    ?>
    <form method="POST" action="adminMedia">
        <input type="hidden" name="id" value="<?php echo ($id != null) ? $id : ""; ?>">
        <input type="hidden" name="search" value="<?php echo ($search != null) ? $search : ""; ?>">
        <input type="hidden" name="type" value="<?php echo ($searchType != null) ? $searchType : ""; ?>">
        <input type="hidden" name="page" value="<?php echo ($page + 1) ?>">
        <input class="Next-button button-pagination" type="submit" value="Next">
    </form>

    <?php
        }
    ?>

    <div class="products">

            <?php
                for($i = $pageMinIndex; $i < $pageMaxIndex && $i < count($data); $i++){
                    $indData = $data[$i];
            ?>

                <div class="product">

                    <div class="product-info">
                        <p><?php echo $indData['name'] ?></p>
                        <figure>
                            <img src="<?php echo $rootPath."/uploads/".$indData['media_id'] ?>" alt="">
                        </figure>

                        <div class="Edit-Delete-div">
                            <form method="POST" action="adminEditMedia">
                                <input type="hidden" name="id" value="<?php echo $indData['media_id'] ?>">
                                <input type="hidden" name="name" value="<?php echo $indData['name'] ?>">
                                <input class="button-pagination" type="submit" value="Edit">
                            </form>

                            <form method="POST" action="adminDeleteMediaFunction">
                                <input type="hidden" name="delete" value="<?php echo $indData['media_id'] ?>">
                                <input class="button-pagination" type="submit" value="Delete">
                            </form>
                        </div>
                    </div>

                </div>
            <?php
                }
            ?>
    </div>


    <?php
        echo "<br>";
        /* Previous button */
        if($page > 0){
    ?>
        <form method="POST" action="adminMedia">
            <input type="hidden" name="id" value="<?php echo ($id != null) ? $id : ""; ?>">
            <input type="hidden" name="search" value="<?php echo ($search != null) ? $search : ""; ?>">
            <input type="hidden" name="type" value="<?php echo ($searchType != null) ? $searchType : ""; ?>">
            <input type="hidden" name="page" value="<?php echo ($page - 1) ?>">
            <input class="Prev-button-lowest button-pagination" type="submit" value="Prev">
        </form>
    <?php
        }
    ?>

    <?php
        /* Next button */
        if($page < (count($data) / $MediaPrPage) - 1){
    ?>
    <form method="POST" action="adminMedia">
        <input type="hidden" name="id" value="<?php echo ($id != null) ? $id : ""; ?>">
        <input type="hidden" name="search" value="<?php echo ($search != null) ? $search : ""; ?>">
        <input type="hidden" name="type" value="<?php echo ($searchType != null) ? $searchType : ""; ?>">
        <input type="hidden" name="page" value="<?php echo ($page + 1) ?>">
        <input class="Next-button-lowest button-pagination" type="submit" value="Next">
    </form>
    <?php
        }
    ?>

</div>

</div>

<?php 
    require_once $rootPath . "views/backend/partials/footer.php";
?>