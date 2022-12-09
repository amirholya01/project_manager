<?php
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }
    require $rootPath . "views/backend/partials/header.php";

    $sql = 'SELECT * FROM users';
?>

<?php 
    //if logged in redirect to /
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true){
        header("Location:/");
    }
?>

<form method="post" action="/controllers/signup.php">
    <fieldset>
        <legend>Sign up</legend>
        <div>
            <label for="name">Name</label> <br>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="password">Password</label> <br>
            <input type="password" name="password" id="password">
        </div>
        <input type="submit" value="Sign up">
    </fieldset>
</form>

<?php
    if(isset($_GET["err"]) && $_GET["err"] == "invalidname"){
?>
    <p>
        Name is already taken or invalid
    </p>
<?php 
    }
?>

<?php 
    require $rootPath . "views/backend/partials/footer.php";
?>