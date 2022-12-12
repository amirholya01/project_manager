<?php
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }
    require_once $rootPath . "public/dbconn.php";

    require_once $rootPath . "models/handlers/Usershandler.php";
    require_once $rootPath . "security/adminCheck.php";

    require_once $rootPath . "security/formSpam.php";
    require_once $rootPath . "security/stringSanitation.php";
    
    require_once $rootPath . "models/handlers/frontpageHandler.php";

    require_once $rootPath . "controllers/adminFrontpage.php";
    require_once $rootPath . "controllers/editFrontpage.php";

    require_once $rootPath . "views/backend/partials/header.php";
?>

<div class="wrapper frontpage">
    <h3>
        WARNING! <br>
        You can only fill out one formular at a time <br>
        Upon submission all other fields will be resat <br>
        Work in progress of a better solution
    </h3>

    <hr class="solid">

    <h2>
        Header
    </h2>
    <form method="POST" action="/adminFrontpage"> <!--  <- Phone  -->
        <h3>
            Phone Number
        </h3>
        <p>The same as in contact</p>
        <input class="input" type="text" name="phone" value="<?php echo $phone ?>">
        <button class="height-button button submit" type="submit">Submit/Edit</button>
    </form>

    <form method="POST" action="/adminFrontpage"> <!--  <- Email  -->
        <h3>
            Email
        </h3>
        <p>The same as in contact</p>
        <input class="input" type="text" name="email" value="<?php echo $email ?>">
        <button class="height-button button submit" type="submit">Submit/Edit</button>
    </form>

    <form method="POST" action="/adminFrontpage"> <!--  <- Navigation  -->
        <h3>
            Navigation
        </h3>
        <input class="input" type="text" name="navHome" value="<?php echo $nav1 ?>">
        <input class="input" type="text" name="navProducts" value="<?php echo $nav2 ?>">
        <input class="input" type="text" name="navAboutUs" value="<?php echo $nav3 ?>">
        <input class="input" type="text" name="navContact" value="<?php echo $nav4 ?>">
        <button class="height-button button submit" type="submit">Submit/Edit</button>
    </form>


    <hr class="solid">


    <h2>
        Banner 1
    </h2>

    <form method="POST" action="/adminFrontpage"> <!--  <- Banner Sub title  -->
        <h3>
            Sub title
        </h3>
        <input class="input" type="text" name="bannerSubtitle" value="<?php echo $bannerSubtitle1 ?>">
        <button class="height-button button submit" type="submit">Submit/Edit</button>
    </form>

    <form method="POST" action="/adminFrontpage"> <!--  <- Banner Title  -->
        <h3>
            Title
        </h3>
        <input class="input" type="text" name="bannerTitle" value="<?php echo $bannerTitle1 ?>">
        <button class="height-button button submit" type="submit">Submit/Edit</button>
    </form>

    <form method="POST" action="/adminFrontpage"> <!--  <- Banner Slogan1  -->
        <h3>
            Banner Slogan - 1
        </h3>
        <input class="input" type="text" name="banner1Slogan1" value="<?php echo $banner1Slogan1 ?>">
        <button class="height-button button submit" type="submit">Submit/Edit</button>
    </form>

    <form method="POST" action="/adminFrontpage"> <!--  <- Banner Slogan2  -->
        <h3>
            Banner Slogan - 2
        </h3>
        <input class="input" type="text" name="banner1Slogan2" value="<?php echo $banner1Slogan2 ?>">
        <button class="height-button button submit" type="submit">Submit/Edit</button>
    </form>

    <form method="POST" action="/adminFrontpage"> <!--  <- Banner Slogan3  -->
        <h3>
            Banner Slogan - 3
        </h3>
        <input class="input" type="text" name="banner1Slogan3" value="<?php echo $banner1Slogan3 ?>">
        <button class="height-button button submit" type="submit">Submit/Edit</button>
    </form>

    <form method="POST" action="/adminFrontpage"> <!--  <- Banner section 1  -->
        <h3>
            Banner / part-1
        </h3>
        <textarea name="bannerText1" id="" cols="60" rows="10"><?php echo $bannerText1 ?></textarea>
        <button class="height-button button submit" type="submit">Submit/Edit</button>
    </form>

    
    <hr class="solid">


    <h2>
        Banner 2
    </h2>

    <form method="POST" action="/adminFrontpage"> <!--  <- Banner Sub title  -->
        <h3>
            Sub title
        </h3>
        <input class="input" type="text" name="bannerSubtitle2" value="<?php echo $bannerSubtitle2 ?>">
        <button class="height-button button submit" type="submit">Submit/Edit</button>
    </form>

    <form method="POST" action="/adminFrontpage"> <!--  <- Banner Title  -->
        <h3>
            Title
        </h3>
        <input class="input" type="text" name="bannerTitle2" value="<?php echo $bannerTitle2 ?>">
        <button class="height-button button submit" type="submit">Submit/Edit</button>
    </form>

    <form method="POST" action="/adminFrontpage"> <!--  <- Banner Slogan  -->
        <h3>
            Banner Slogan
        </h3>
        <input class="input" type="text" name="bannerSlogan2" value="<?php echo $bannerSlogan2 ?>">
        <button class="height-button button submit" type="submit">Submit/Edit</button>
    </form>

    <form method="POST" action="/adminFrontpage"> <!--  <- Banner section 1  -->
        <h3>
            Banner / part-1
        </h3>
        <textarea name="banner2Text1" id="" cols="60" rows="10"><?php echo $banner2Text1 ?></textarea>
        <button class="height-button button submit" type="submit">Submit/Edit</button>
    </form>



    <hr class="solid">

    <h2>
        Frontpage
    </h2>
    <!-- Main slider -->
    <!-- ^ should have create and delete -->
    <forms method="POST" action="/adminFrontpage"> <!--  <- About us  -->
        <h3>
            About us
        </h3>
        <p>This is the same one as on the about us page</p>
        <textarea name="aboutUs1" id="" cols="60" rows="10"><?php echo $aboutUs1 ?></textarea>
        <button class="height-button button submit" type="submit">Submit/Edit</button>
    </form>

    <hr class="solid">

    <h2>
        Products
    </h2>
    <form method="POST" action="/adminFrontpage"> <!--  <- Sub title  -->
        <h3>
            Sub title
        </h3>
        <input class="input" type="text" name="productsSubtitle" value="<?php echo $productsSubtitle ?>">
        <button class="height-button button submit" type="submit">Submit/Edit</button>
    </form>
    <form method="POST" action="/adminFrontpage"> <!--  <- Title  -->
        <h3>
            Title
        </h3>
        <input class="input" type="text" name="productsTitle" value="<?php echo $productsTitle ?>">
        <button class="height-button button submit" type="submit">Submit/Edit</button>
    </form>
    <!-- Categories  - Product types! -->



    <hr class="solid">



    <h2>
        About us
    </h2>


    <form method="POST" action="/adminFrontpage"> <!--  <- Sub title  -->
        <h3>
            Sub title
        </h3>
        <input class="input" type="text" name="aboutusSubtitle" value="<?php echo $aboutusSubtitle ?>">
        <button class="height-button button submit" type="submit">Submit/Edit</button>
    </form>

    <form method="POST" action="/adminFrontpage"> <!--  <- Title  -->
        <h3>
            Title
        </h3>
        <input class="input" type="text" name="aboutusTitle" value="<?php echo $aboutusTitle ?>">
        <button class="height-button button submit" type="submit">Submit/Edit</button>
    </form>

    <form method="POST" action="/adminFrontpage"> <!--  <- Slogan  -->
        <h3>
           Slogan
        </h3>
        <input class="input" type="text" name="aboutusSlogan" value="<?php echo $aboutusSlogan ?>">
        <button class="height-button button submit" type="submit">Submit/Edit</button>
    </form>
    <!-- Descriptions -->
    <!-- ^ should have create and delete -->

    <form method="POST" action="/adminFrontpage"> <!--  <- About us  -->
        <h3>
            About us / part-1
        </h3>
        <p>This is the same one as on the frontpage</p>
        <textarea name="aboutUs1" id="" cols="60" rows="10"><?php echo $aboutUs1 ?></textarea>
        <button class="height-button button submit" type="submit">Submit/Edit</button>
    </form>

    <form method="POST" action="/adminFrontpage"> <!--  <- About us  -->
        <h3>
            About us / part-2
        </h3>
        <p>This is the same one as on the frontpage</p>
        <textarea name="aboutUs2" id="" cols="60" rows="10"><?php echo $aboutUs2 ?></textarea>
        <button class="height-button button submit" type="submit">Submit/Edit</button>
    </form>



    <hr class="solid">



    <h2>
        Contact
    </h2>
    <form method="POST" action="/adminFrontpage"> <!--  <- Sub title  -->
        <h3>
            Sub title
        </h3>
        <input class="input" type="text" name="contactSubtitle" value="<?php echo $contactSubtitle ?>">
        <button class="height-button button submit" type="submit">Submit/Edit</button>
    </form>
    <form method="POST" action="/adminFrontpage"> <!--  <- Title  -->
        <h3>
            Title
        </h3>
        <input class="input" type="text" name="contactTitle" value="<?php echo $contactTitle ?>">
        <button class="height-button button submit" type="submit">Submit/Edit</button>
    </form>
    <form method="POST" action="/adminFrontpage"> <!--  <- Contact forms  -->
        <h3>
            Contact forms
        </h3>
        <input class="input" type="text" name="address" placeholder="Address" value="<?php echo $address ?>">
        <input class="input" type="text" name="phone" placeholder="Phone" value="<?php echo $phone ?>">
        <input class="input" type="text" name="email" placeholder="Email" value="<?php echo $email ?>">
        <input class="input" type="text" name="follow" placeholder="Follow us" value="<?php echo $follow ?>">
        <button class="height-button button submit" type="submit">Submit/Edit</button>
    </form>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


    <!-- FOOTER -->
    
</div>

<?php 
    require_once $rootPath . "views/backend/partials/footer.php";
?>
