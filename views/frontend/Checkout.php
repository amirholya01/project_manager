<?php
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }

    $pageName = "Checkout";
    $pageLink = "/Checkout";
    $pageLevel = 3;
    
    require_once $rootPath . "views/frontend/Breadcrumb.php";
    require_once $rootPath . "views/frontend/partials/header.php";
?>


<div class="empty-space col-xs-b15 col-sm-b30"></div>
<div class="empty-space col-xs-b15 col-sm-b30"></div>
<div class="empty-space col-xs-b15 col-sm-b30"></div>
<div class="empty-space col-xs-b15 col-sm-b30"></div>
<div class="empty-space col-xs-b15 col-sm-b30"></div>
<div class="empty-space col-xs-b15 col-sm-b30"></div>
<div class="empty-space col-xs-b15 col-sm-b30"></div>



        <!-- impelementing the sitemap with a for loop (breadcrumb) -->
        <form id="purchase" action="/purchase" method="POST"></form>
        <div class="breadcrumbs margin-15-left">
            <?php 
            for($i = 0; $i < count($_SESSION['breadcrumbs']); $i++){
                $link = $_SESSION['breadcrumbsLinks'][$i];
                echo "<a class='breadcrumb-flex' href='$link'> ".$_SESSION['breadcrumbs'][$i]."</a>";
            }
            ?>
        </div>

        <div class="container">
            <div class="text-center">
                <div class="simple-article size-3 grey uppercase col-xs-b5">checkout</div>
                <div class="h2">check your info</div>
                <div class="title-underline center"><span></span></div>
            </div>
        </div>

        <div class="empty-space col-xs-b35 col-md-b70"></div>

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-b50 col-md-b0">
                    <h4 class="h4 col-xs-b25">billing details</h4>
                    <select class="SlectBox" form="purchase" name="country">
                        <option disabled="disabled" selected="selected">Choose country</option>
                        <option value="denmark">Denmark</option>
                        <option value="atlantis">Atlantis</option>
                        <option value="USA">USA</option>
                        <option value="No where">No where</option>
                    </select>
                    <div class="empty-space col-xs-b20"></div>
                    <div class="row m10">
                        <div class="col-sm-6">
                            <input class="simple-input" type="text" value="" placeholder="First name" name="firstname" form="purchase" required/>
                            <div class="empty-space col-xs-b20"></div>
                        </div>
                        <div class="col-sm-6">
                            <input class="simple-input" type="text" value="" placeholder="Last name" name="lastname" form="purchase" required/>
                            <div class="empty-space col-xs-b20"></div>
                        </div>
                    </div>
                    <input class="simple-input" type="text" value="" placeholder="Company name (Optional)" name="company" form="purchase"/>
                    <div class="empty-space col-xs-b20"></div>
                    <input class="simple-input" type="text" value="" placeholder="Street address" name="address" form="purchase" required/>
                    <div class="empty-space col-xs-b20"></div>
                    <div class="row m10">
                        <div class="col-sm-6">
                            <input class="simple-input" type="text" value="" placeholder="Appartment (Optional)" name="appartment" form="purchase"/>
                            <div class="empty-space col-xs-b20"></div>
                        </div>
                        <div class="col-sm-6">
                            <input class="simple-input" type="text" value="" placeholder="Town/City" name="city" form="purchase" required/>
                            <div class="empty-space col-xs-b20"></div>
                        </div>
                    </div>
                    <div class="row m10">
                        <div class="col-sm-6">
                            <input class="simple-input" type="text" value="" placeholder="State/Country" name="state" form="purchase" required/>
                            <div class="empty-space col-xs-b20"></div>
                        </div>
                        <div class="col-sm-6">
                            <input class="simple-input" type="text" value="" placeholder="Postcode/ZIP" name="postcode" form="purchase" required/>
                            <div class="empty-space col-xs-b20"></div>
                        </div>
                    </div>
                    <div class="row m10">
                        <div class="col-sm-6">
                            <input class="simple-input" type="text" value="" placeholder="Email" name="email" form="purchase" required/>
                            <div class="empty-space col-xs-b20"></div>
                        </div>
                        <div class="col-sm-6">
                            <input class="simple-input" type="text" value="" placeholder="Phone" name="phone" form="purchase" required/>
                            <div class="empty-space col-xs-b20"></div>
                        </div>
                    </div>
                    <label class="checkbox-entry">
                        <input type="checkbox" value="true" name="policy" form="purchase" required><span>Privacy policy agreement</span>
                    </label>
                    <div class="empty-space col-xs-b50"></div>
                    <label class="checkbox-entry checkbox-toggle-title">
                        <input type="checkbox" value="true" name="altAddress"><span>ship to different address?</span>
                    </label>
                    <div class="checkbox-toggle-wrapper">
                        <div class="empty-space col-xs-b25"></div>
                        <select class="SlectBox" form="purchase" name="altCountry">
                            <option disabled="disabled" selected="selected">Choose country</option>
                            <option value="denmark">Denmark</option>
                            <option value="atlantis">Atlantis</option>
                            <option value="USA">USA</option>
                            <option value="No where">No where</option>
                        </select>
                        <div class="empty-space col-xs-b20"></div>
                        <div class="row m10">
                            <div class="col-sm-6">
                                <input class="simple-input" type="text" value="" placeholder="First name" name="altFirstname" form="purchase"/>
                                <div class="empty-space col-xs-b20"></div>
                            </div>
                            <div class="col-sm-6">
                                <input class="simple-input" type="text" value="" placeholder="Last name" name="altLastname" form="purchase"/>
                                <div class="empty-space col-xs-b20"></div>
                            </div>
                        </div>
                        <input class="simple-input" type="text" value="" placeholder="Company name" name="altCompany" form="purchase"/>
                        <div class="empty-space col-xs-b20"></div>
                        <input class="simple-input" type="text" value="" placeholder="Street address" name="altAddress" form="purchase"/>
                        <div class="empty-space col-xs-b20"></div>
                        <div class="row m10">
                            <div class="col-sm-6">
                                <input class="simple-input" type="text" value="" placeholder="Appartment" name="altAppartment" form="purchase"/>
                                <div class="empty-space col-xs-b20"></div>
                            </div>
                            <div class="col-sm-6">
                                <input class="simple-input" type="text" value="" placeholder="Town/City" name="altCity" form="purchase"/>
                                <div class="empty-space col-xs-b20"></div>
                            </div>
                        </div>
                        <div class="row m10">
                            <div class="col-sm-6">
                                <input class="simple-input" type="text" value="" placeholder="State/Country" name="altState" form="purchase"/>
                                <div class="empty-space col-xs-b20"></div>
                            </div>
                            <div class="col-sm-6">
                                <input class="simple-input" type="text" value="" placeholder="Postcode/ZIP" name="altPostcode" form="purchase"/>
                                <div class="empty-space col-xs-b20"></div>
                            </div>
                        </div>
                    </div>
                    <div class="empty-space col-xs-b30 col-sm-b60"></div>
                    <textarea class="simple-input" form="purchase" name="note" placeholder="Note about your order (Optional)"></textarea>
                </div>
                <div class="col-md-6">
                    <h4 class="h4 col-xs-b25">your order</h4>
                    <?php 
                        foreach($cart as $item){
                    ?>
                    <div class="cart-entry clearfix">
                        <?php $image = explode(".", $item['product'][0]['primary_image']) ?>
                        <a class="cart-entry-thumbnail Cart-image" href="#"><img src="uploads/thumbs/<?php echo $image[0] . "_thumb." . $image[1] ?>" alt=""></a>
                        <div class="cart-entry-description">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="h6"><a href="#"><?php echo $item['product'][0]['name'] ?></a></div>
                                            <div class="simple-article size-1">QUANTITY: <?php echo $item['quantity'] ?></div>
                                        </td>
                                        <td>
                                            <div class="simple-article size-3 grey"><?php echo $item['product'][0]['price'] ?> DKK</div>
                                            <div class="simple-article size-1">TOTAL: <?php print_r( $item['total']) ?> DKK</div>
                                        </td>
                                        <td>
                                            <form action="/removeFromCart" method="POST">
                                                <input type="hidden" name="id" value="<?php print_r($item['product'][0]['products_id']) ?>">
                                                <button type="submit">X</button>
                                            </form>
                                            <form action="/editQuantityInCart" method="POST">
                                                <input type="hidden" name="id" value="<?php print_r($item['product'][0]['products_id']) ?>">
                                                <input type="number" name="quantity" value="<?php echo $item['quantity'] ?>">
                                                <button type="submit">edit</button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <?php 
                        }
                    ?>
                    <br>
                    <div class="simple-article size-5 grey"> TOTAL
                        <span class="color"><?php echo $total ?> DKK</span>
                    </div>
                    <div class="empty-space col-xs-b50"></div>
                    <h4 class="h4 col-xs-b25">payment method</h4>
                    <select class="SlectBox">
                        <option selected="selected">Bank transfer</option>
                    </select>
                    <div class="empty-space col-xs-b10"></div>
                    <div class="simple-article size-2">* The transfer details will be send to you through email once you have placed the order. we will start packing the package once we have gotten the money.</div>
                    <div class="empty-space col-xs-b30"></div>
                    <?php 
                        $emptyCart = false;
                        if($_SESSION['cart'] == array()){
                            $emptyCart = true;
                        }
                    ?>
                    <div class="button block size-2 style-3"
                    <?php
                        if($emptyCart == true){
                            echo "style='background: gray !important;'";
                        }
                    ?>
                    >
                        <span class="button-wrapper">
                            <span class="icon"><img src="assets/icons/icon-4.png" alt=""></span>
                            <?php
                                if($emptyCart == false){
                            ?>
                                <span class="text">place order</span>
                            <?php
                                } else {
                            ?>
                                <span class="text">Your cart is empty</span>
                            <?php
                                }
                            ?>
                        </span>
                        <?php
                            if($emptyCart == false){
                        ?>
                            <input type="submit" form="purchase"/>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>



        <div class="empty-space col-xs-b35 col-md-b70"></div>


<?php 
    require_once $rootPath . "views/frontend/partials/footer.php";
?>