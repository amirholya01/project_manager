<?php
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }
    
    if($_POST == array()){
        $_POST = $_SESSION["savedPost"]['adminUsers'];
    }else{
        $_SESSION["savedPost"]['adminUsers'] = $_POST;
    }

    require_once $rootPath . "public/dbconn.php";
    
    
    require_once $rootPath . "models/handlers/Usershandler.php";
    require_once $rootPath . "security/adminCheck.php";
    

    require_once $rootPath . "security/formSpam.php";
    require_once $rootPath . "security/stringSanitation.php";



    require_once $rootPath . "controllers/createUser.php";
    require_once $rootPath . "controllers/editUser.php";
    require_once $rootPath . "controllers/deleteUser.php";


    require_once $rootPath . "controllers/getUsersWithFilters.php";

    require_once $rootPath . "views/backend/partials/header.php";

    /* This is to make so search data dosent disapear after search */
    $id = null;
    if(isset($_POST['id'])){
        $id = $_POST['id'];
    }
    $name = null;
    if(isset($_POST['name'])){
        $name = $_POST['name'];
    }
    $role = null;
    if(isset($_POST['role'])){
        $role = $_POST['role'];
    }
    $page = 0;
    if($_SESSION['pageNrName'] != 'users'){
        $_SESSION['pageNr'] = 0;
    }elseif(isset($_POST['page'])){
        if($_SESSION['pageNrName'] == 'users'){
            $page = $_POST['page'];
            $_SESSION['pageNr'] = $page;
        }
    }else{
        if($_SESSION['pageNrName'] == 'users'){
            $page = $_SESSION['pageNr'];
        }
    }
    $_SESSION['pageNrName'] = 'users';
?>

<div class="wrapper">
    <form class="Admin-handlers" method="POST" action="adminUsers">

        <div class="Admin-search-product">
            <input class="input" type="text" name="id" placeholder="ID"  value="<?php echo ($id != null) ? $id : ""; ?>">
            <input class="input" type="text" name="name" placeholder="Name"  value="<?php echo ($name != null) ? $name : ""; ?>">
            <select name="role">
                <option value="">None</option>
                <option <?php echo ($role === "0") ? "selected" : ""; ?> value="0">Customer</option>
                <option <?php echo ($role == 1) ? "selected" : ""; ?> value="1">Admin</option>
            </select>
            <input class="button submit" type="submit">
        </div>

        <div class="Reset_create_div">
            <a class="button" href="/adminUsers">Reset</a>
            <a class="button" href="/adminCreateUser">Create new user</a>
        </div>

    </form>
    

    <?php
        $pageNr = $page;
        $usersPrPage = 10;
        $pageMinIndex = $pageNr * $usersPrPage;
        $pageMaxIndex = $pageMinIndex + $usersPrPage;
    ?>

<div class="Admin-page-title">
    <h1>Users</h1>
</div>

<div class="wrapper-main-area">

    <?php
        /* Previous button */
        if($page > 0){
    ?>
        <form method="POST" action="adminUsers">
            <input type="hidden" name="id" value="<?php echo ($id != null) ? $id : ""; ?>">
            <input type="hidden" name="name" value="<?php echo ($name != null) ? $name : ""; ?>">
            <input type="hidden" name="page" value="<?php echo ($page - 1) ?>">
            <input class="Prev-button button-pagination" type="submit" value="Prev">
        </form>
    <?php
        }
    ?>

    <?php
        /* Next button */
        if($page < (count($data) / $usersPrPage) - 1){
    ?>
    <form method="POST" action="adminUsers">
        <input type="hidden" name="id" value="<?php echo ($id != null) ? $id : ""; ?>">
        <input type="hidden" name="name" value="<?php echo ($name != null) ? $name : ""; ?>">
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
                        <p><?php echo array('Customer', 'Admin')[$indData['role']] ?></p>
                    </div>
                        <div class="Edit-Delete-div">
                            <form method="POST" action="adminEditUser">
                                <input type="hidden" name="id" value="<?php echo $indData['user_id'] ?>">
                                <input type="hidden" name="name" value="<?php echo $indData['name'] ?>">
                                <input type="hidden" name="role" value="<?php echo $indData['role'] ?>">
                                <input class="button-pagination" type="submit" value="Edit">
                            </form>

                            <form class="Edit-Delete-div" method="POST" action="adminUsers">
                                <input type="hidden" name="delete" value="<?php echo $indData['user_id'] ?>">
                                <input class="button-pagination" type="submit" value="Delete">
                            </form>
                        </div>
                    

                </div>

            <?php
                }
            ?>
    </div>

    <?php
        /* Previous button */
        echo "<br>";
        if($page > 0){
    ?>
        <form method="POST" action="adminUsers">
            <input type="hidden" name="id" value="<?php echo ($id != null) ? $id : ""; ?>">
            <input type="hidden" name="name" value="<?php echo ($name != null) ? $name : ""; ?>">
            <input type="hidden" name="page" value="<?php echo ($page - 1) ?>">
            <input class="Prev-button-lowest button-pagination" type="submit" value="Prev">
        </form>
    <?php
        }
    ?>

    <?php
        /* Next button */
        if($page < (count($data) / $usersPrPage) - 1){
    ?>
    <form method="POST" action="adminUsers">
        <input type="hidden" name="id" value="<?php echo ($id != null) ? $id : ""; ?>">
        <input type="hidden" name="name" value="<?php echo ($name != null) ? $name : ""; ?>">
        <input type="hidden" name="page" value="<?php echo ($page + 1) ?>">
        <input class="Next-button-lowest button-pagination" type="submit" value="Next">
    </form>
    <?php
        }
    ?>


</div>

</div>

<?php 
    require $rootPath . "views/backend/partials/footer.php";
?>