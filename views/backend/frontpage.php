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

    require_once $rootPath . "controllers/editFrontpage.php";

    require_once $rootPath . "views/backend/partials/header.php";
?>

<div class="wrapper">
    <h2>
        Header
    </h2>
    <form method="POST" action="/adminFrontpage"> <!--  <- Phone  -->
        <h3>
            Phone Number
        </h3>
        <p>The same as in contact</p>
        <input type="text" name="phone">
        <button type="submit">Edit</button>
    </form>
    <form method="POST" action="/adminFrontpage"> <!--  <- Email  -->
        <h3>
            Email
        </h3>
        <p>The same as in contact</p>
        <input type="text" name="email">
        <button type="submit">Edit</button>
    </form>
    <form method="POST" action="/adminFrontpage"> <!--  <- Navigation  -->
        <h3>
            Navigation
        </h3>
        <input type="text" name="navHome">
        <input type="text" name="navProducts">
        <input type="text" name="navAboutUs">
        <input type="text" name="navContact">
        <button type="submit">Edit</button>
    </form>
    

    <h2>
        Frontpage
    </h2>
    <!-- Main slider -->
    <!-- ^ should have create and delete -->
    <form method="POST" action="/adminFrontpage"> <!--  <- About us  -->
        <h3>
            About us
        </h3>
        <p>This is the same one as on the about us page</p>
        <textarea name="aboutUs" id="" cols="60" rows="10"></textarea>
        <button type="submit">Edit</button>
    </form>


    <h2>
        Products
    </h2>
    <form method="POST" action="/adminFrontpage"> <!--  <- Sub title  -->
        <h3>
            Sub title
        </h3>
        <input type="text" name="productsSubtitle">
        <button type="submit">Edit</button>
    </form>
    <form method="POST" action="/adminFrontpage"> <!--  <- Title  -->
        <h3>
            Title
        </h3>
        <input type="text" name="productsTitle">
        <button type="submit">Edit</button>
    </form>
    <!-- Categories  - Product types! -->


    <h2>
        About us
    </h2>
    <form method="POST" action="/adminFrontpage"> <!--  <- Sub title  -->
        <h3>
            Sub title
        </h3>
        <input type="text" name="aboutusSubtitle">
        <button type="submit">Edit</button>
    </form>
    <form method="POST" action="/adminFrontpage"> <!--  <- Title  -->
        <h3>
            Title
        </h3>
        <input type="text" name="aboutusTitle">
        <button type="submit">Edit</button>
    </form>
    <!-- Descriptions -->
    <!-- ^ should have create and delete -->
    <form method="POST" action="/adminFrontpage"> <!--  <- About us  -->
        <h3>
            About us
        </h3>
        <p>This is the same one as on the frontpage</p>
        <textarea name="aboutUs" id="" cols="60" rows="10"></textarea>
        <button type="submit">Edit</button>
    </form>


    <h2>
        Contact
    </h2>
    <form method="POST" action="/adminFrontpage"> <!--  <- Sub title  -->
        <h3>
            Sub title
        </h3>
        <input type="text" name="contactSubtitle">
        <button type="submit">Edit</button>
    </form>
    <form method="POST" action="/adminFrontpage"> <!--  <- Title  -->
        <h3>
            Title
        </h3>
        <input type="text" name="contactTitle">
        <button type="submit">Edit</button>
    </form>
    <form method="POST" action="/adminFrontpage"> <!--  <- Contact forms  -->
        <h3>
            Contact forms
        </h3>
        <input type="text" name="conAddress" placeholder="Address">
        <input type="text" name="conPhone" placeholder="Phone">
        <input type="text" name="conEmail" placeholder="Email">
        <input type="text" name="conFollow" placeholder="Follow us">
        <button type="submit">Edit</button>
    </form>
    <br>
    <br>
    <br>


    <!-- FOOTER -->
    
</div>

<?php 
    require_once $rootPath . "views/backend/partials/footer.php";
?>
