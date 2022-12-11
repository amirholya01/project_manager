<?php
    $passValidation = true;

    /* Check if cart is empty */
    if($_SESSION['cart'] == array()){
        $passValidation = false;
    }

    /* Check if info was correctly filled out */
    if(isset($_POST['country']) && $_POST['country'] == ''){
        $passValidation = false;
    }
    if($_POST['firstname'] == '' && isset($_POST['firstname'])){
        $passValidation = false;
    }
    if($_POST['lastname'] == '' && isset($_POST['lastname'])){
        $passValidation = false;
    }
    if($_POST['address'] == '' && isset($_POST['address'])){
        $passValidation = false;
    }
    if($_POST['appartment'] == '' && isset($_POST['appartment'])){
        $passValidation = false;
    }
    if($_POST['city'] == '' && isset($_POST['city'])){
        $passValidation = false;
    }
    if($_POST['state'] == '' && isset($_POST['state'])){
        $passValidation = false;
    }
    if($_POST['postcode'] == '' && isset($_POST['postcode'])){
        $passValidation = false;
    }
    if($_POST['email'] == '' && isset($_POST['email'])){
        $passValidation = false;
    }
    if($_POST['phone'] == '' && isset($_POST['phone'])){
        $passValidation = false;
    }

    if($passValidation == false){
?>
        <script>
            window.history.go(-1);
        </script>
<?php
    } else {

    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }
    
    $pageName = "Purchase";
    $pageLink = "/Purchase";
    $pageLevel = 4;

    require_once $rootPath . "views/frontend/partials/header.php";
    require_once $rootPath . "views/frontend/Breadcrumb.php";

    require_once $rootPath . "models/handlers/frontpageHandler.php"; 
    require_once $rootPath . "controllers/frontpage.php"; 

    /* Purchase controller and send to db and email the customer */
    require_once $rootPath . "controllers/purchase.php"; 

    /* reset cart */
    //$cart = $_SESSION['cart']; if you need the cart in here at some point
    $_SESSION['cart'] = array();
?>


<div class="empty-space col-xs-b35 col-md-b70"></div>
<div class="empty-space col-xs-b35 col-md-b70"></div>
<div class="empty-space col-xs-b35 col-md-b70"></div>

<div class="breadcrumbs SiteMap">
    <?php
        for($i = 0; $i < count($_SESSION['breadcrumbs']); $i++){
            $link = $_SESSION['breadcrumbsLinks'][$i];
            echo "<a class='breadcrumb-flex' href='$link'> ".$_SESSION['breadcrumbs'][$i]."</a>";
        }
    ?>
</div>

<div class="container">
    <div class="text-center">
        <div class="simple-article size-3 grey uppercase col-xs-b5">Thank you for</div>
        <div class="h2">your order</div>
        <div class="title-underline center"><span></span></div>
    </div>
</div>

<div class="empty-space col-sm-b15 col-md-b50"></div>

<div class="container">
    <div class="row">
        <?php
            echo "Country: ";
            echo $_POST['country'];
            echo "<br>";
            echo "Name: ";
            echo $_POST['firstname'];
            echo " ";
            echo $_POST['lastname'];
            echo "<br>";
            if($_POST['company'] != ''){
                echo "Company: ";
                echo $_POST['company'];
                echo "<br>";
            }
            echo "Address: ";
            echo $_POST['address'];
            echo "<br>";
            echo "Appartment: ";
            echo $_POST['appartment'];
            echo "<br>";
            echo "City: ";
            echo $_POST['city'];
            echo "<br>";
            echo "State: ";
            echo $_POST['state'];
            echo "<br>";
            echo "Postcode/ZIP: ";
            echo $_POST['postcode'];
            echo "<br>";
            echo "Email: ";
            echo $_POST['email'];
            echo "<br>";
            echo "Phone: ";
            echo $_POST['phone'];
            echo "<br>";
            if($_POST['note'] != ''){
                echo "Note: ";
                echo $_POST['note'];
                echo "<br>";
            }
        ?>
    </div>
</div>

<div class="empty-space col-xs-b25 col-sm-b50"></div>
<div class="empty-space col-xs-b25 col-sm-b50"></div>
<div class="empty-space col-xs-b35 col-md-b70"></div>
<div class="empty-space col-xs-b35 col-md-b70"></div>





<?php 
        require_once $rootPath . "views/frontend/partials/footer.php";
    }   /* Belongs to the else statement in the top */
?>