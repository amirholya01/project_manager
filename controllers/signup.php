<?php
    /* 📒 */
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }
    require $rootPath . "public/dbconn.php";
    require $rootPath . "models/handlers/UsersHandler.php";
    
    require_once $rootPath . "security/formSpam.php";
    require_once $rootPath . "security/inputSanitation.php";

    if(count($_SESSION['breadcrumbsLinks']) > 0){
        $linkToPrevPage = end($_SESSION['breadcrumbsLinks']);
    }else{
        $linkToPrevPage = '/';
    }

    if($_POST['password'] != $_POST['passwordCheck']){ /* ✒️ I dont check if the privacy thing is checked */
?>
        <form id="submit" action="<?php echo $linkToPrevPage ?>" method="POST">
            <input type="hidden" name="signupFailed" value="true">
        </form>
        <script type="text/javascript">
            //Auto submits the form
            document.querySelector('#submit').submit();
        </script>
<?php
    }else{
        $name = $inputSanitation->sanitice($_POST['name']);
        $password = $inputSanitation->sanitice($_POST['password']);

        $validStrings = $inputSanitation->getValidationStatus();

        if($validStrings == true){
            $data = $UsersHandler->checkIfUserExists($name);
            
            $validName = true;
            if(isset($data[0])){
                $validName = false;
            }
            
            if($validName && $name != ""){
                /* The salt is pretty low, should be higher in none testing environment */
                $password = password_hash($_POST['password'], PASSWORD_BCRYPT, ["cost" => 5]);

                $UsersHandler->createUser($name, $password, 0);
                
                $_SESSION['name'] = $name;
                $_SESSION['loggedin'] = true;
                
                header("Location: $linkToPrevPage");
            }else{
?>
                <form id="submit" action="<?php echo $linkToPrevPage ?>" method="POST">
                    <input type="hidden" name="signupFailed" value="true">
                    <input type="hidden" name="signupFailedNameTaken" value="true">
                </form>
                <script type="text/javascript">
                    //Auto submits the form
                    document.querySelector('#submit').submit();
                </script>
<?php
            }
        }
    }
