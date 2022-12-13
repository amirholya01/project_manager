<?php
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }

    if($_POST == array()){
        $_POST = $_SESSION["savedPost"]['adminOrders'];
    }else{
        $_SESSION["savedPost"]['adminOrders'] = $_POST;
    }

    $filter = false;
    require_once $rootPath . "public/dbconn.php";

    require_once $rootPath . "models/handlers/productsHandler.php";
    require_once $rootPath . "models/handlers/purchaseHandler.php";
    require_once $rootPath . "models/handlers/Usershandler.php";
    require_once $rootPath . "security/adminCheck.php";
    
    require_once $rootPath . "controllers/getOrdersWithFilters.php";

    require_once $rootPath . "views/backend/partials/header.php";

    /* This is to make so search data dosent disapear after search */
    $id = null;
    if(isset($_POST['id'])){
        $id = $_POST['id'];
    }
    $fname = null;
    if(isset($_POST['fname'])){
        $fname = $_POST['fname'];
    }
    $lname = null;
    if(isset($_POST['lname'])){
        $lname = $_POST['lname'];
    }
    $address = null;
    if(isset($_POST['address'])){
        $address = $_POST['address'];
    }
    $page = 0;
    if(isset($_POST['page'])){
        $page = $_POST['page'];
    }
?>
<div class="wrapper">


    <form class="Admin-handlers" method="POST" action="adminProducts">

        <!-- <div class="Admin-search-product"> ✒️ Ran out of time to make this work
            <input class="input" type="text" name="id" placeholder="ID" value="<?php //echo ($id != null) ? $id : ""; ?>">
            <input class="input" type="text" name="fname" placeholder="First name" value="<?php //echo ($fname != null) ? $fname : ""; ?>">
            <input class="input" type="text" name="lname" placeholder="Last name" value="<?php //echo ($lname != null) ? $lname : ""; ?>">
            <input class="input" type="text" name="address" placeholder="Address" value="<?php //echo ($address != null) ? $address : ""; ?>">
                
            <input class="button submit" type="submit">
        </div> -->

        <div class="Reset_create_div">
            <!-- <a class="button" href="/orders">Reset</a> -->
            <a class="button" href="/adminNewOrders">New Orders</a>
        </div>
    </form>

  



        <?php
            $pageNr = $page;
            $productsPrPage = 10;
            $pageMinIndex = $pageNr * $productsPrPage;
            $pageMaxIndex = $pageMinIndex + $productsPrPage;
        ?>

        <!-- ✒️ Should keep you on the same page when deleting or editing a product -->



        <div class="Admin-page-title">
              <h1>All Orders</h1>
        </div>

<div class="wrapper-main-area">

       
        <?php
            /* Previous button */
            if($page > 0){
        ?>

            
                <form method="POST" action="adminProducts">
                    <input type="hidden" name="id" value="<?php echo ($id != null) ? $id : ""; ?>">
                    <input type="hidden" name="fname" value="<?php echo ($fname != null) ? $fname : ""; ?>">
                    <input type="hidden" name="lname" value="<?php echo ($lname != null) ? $lname : ""; ?>">
                    <input type="hidden" name="address" value="<?php echo ($address != null) ? $address : ""; ?>">
                    <input type="hidden" name="page" value="<?php echo ($page - 1) ?>">
                    <input class="Prev-button button-pagination" type="submit" value="Prev">
                </form>

        <?php
            }
        ?>



        <?php
            /* Next button */
            if($page < (count($data) / $productsPrPage) - 1){
        ?>
                <form method="POST" action="adminProducts">
                    <input type="hidden" name="id" value="<?php echo ($id != null) ? $id : ""; ?>">
                    <input type="hidden" name="fname" value="<?php echo ($fname != null) ? $fname : ""; ?>">
                    <input type="hidden" name="lname" value="<?php echo ($lname != null) ? $lname : ""; ?>">
                    <input type="hidden" name="address" value="<?php echo ($address != null) ? $address : ""; ?>">
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
                                <p>
                                    Status
                                </p>
                                <p><?php echo $indData['payed'] == 0 ? "NOT payed" : "Has payed" ?></p>
                                <p><?php echo $indData['send'] == 0 ? "NOT send" : "Is send" ?></p>
                                <br>
                                <p><?php echo $indData['time'] ?></p>
                                <p>Order id: <?php echo $indData['id'] ?></p>
                                <br>
                                <p>
                                    Contact
                                </p>
                                <p><?php echo $indData['fname']; echo " " . $indData['lname'] ?></p>
                                <p><?php echo $indData['email'] ?></p>
                                <p><?php echo $indData['phone'] ?></p>
                                <br>
                                <p>
                                    Address
                                </p>
                                <p><?php echo $indData['country'] ?></p>
                                <p><?php echo $indData['address'] ?></p>
                                <p><?php echo $indData['appartment'] ?></p>
                                <p><?php echo $indData['city'] ?></p>
                                <p><?php echo $indData['state'] ?></p>
                                <p><?php echo $indData['postcode'] ?></p>
                                <br>
                                <p>
                                    Note
                                </p>
                                <br>
                                <p><?php echo $indData['note'] ?></p>
                                <form action="/addPayedToOrder" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $indData['id'] ?>">
                                    <input type="hidden" name="payed" value="<?php echo $indData['payed'] ?>">
                                    <input type="submit" value="Toggle Payed">
                                </form>
                                <form action="/addSendToOrder" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $indData['id'] ?>">
                                    <input type="hidden" name="send" value="<?php echo $indData['send'] ?>">
                                    <input type="submit" value="Toggle send">
                                </form>
                                <p>
                                    <br>
                                    Order:
                                </p>
                                <?php
                                    /* ✒️ running out of time to find a better solution */
                                    $getProducts = $db->prepare("SELECT * FROM `products_assigned_to_purchases` WHERE `purchase_id` = :id ");
                                    $getProducts->bindParam(":id", $indData['id']);
                                    $getProducts->execute();
                                    $getProducts = $getProducts->fetchAll();

                                    foreach($getProducts as $product){
                                        $getProd = $db->prepare("SELECT * FROM `products` WHERE `products_id` = :id ");
                                        $getProd->bindParam(":id", $product['product_id']);
                                        $getProd->execute();
                                        $getProd = $getProd->fetch();

                                        echo "Name: ";
                                        echo $getProd['name'];
                                        echo "<br>";
                                        echo " Qty: ";
                                        echo $product['quantity'];
                                        echo "<br>";
                                        echo "<br>";
                                        echo "<br>";
                                    }
                                ?>
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

                
                    <form method="POST" action="adminProducts">
                        <input type="hidden" name="id" value="<?php echo ($id != null) ? $id : ""; ?>">
                        <input type="hidden" name="fname" value="<?php echo ($fname != null) ? $fname : ""; ?>">
                        <input type="hidden" name="lname" value="<?php echo ($lname != null) ? $lname : ""; ?>">
                        <input type="hidden" name="address" value="<?php echo ($address != null) ? $address : ""; ?>">
                        <input type="hidden" name="page" value="<?php echo ($page - 1) ?>">
                        <input class="Prev-button-lowest button-pagination" type="submit" value="Prev">
                    </form>

            <?php
                }
            ?>

            <?php
                /* Next button */
                if($page < (count($data) / $productsPrPage) - 1){
            ?>

                
                    <form method="POST" action="adminProducts">
                        <input type="hidden" name="id" value="<?php echo ($id != null) ? $id : ""; ?>">
                        <input type="hidden" name="fname" value="<?php echo ($fname != null) ? $fname : ""; ?>">
                        <input type="hidden" name="lname" value="<?php echo ($lname != null) ? $lname : ""; ?>">
                        <input type="hidden" name="address" value="<?php echo ($address != null) ? $address : ""; ?>">
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