<?php

$user_id = null;

/* 
    If a delete is posted then delete the user with the given id 
*/
if(isset($_POST['delete'])){
    $inputSanitation->numberSanitice($_POST['delete']);
    
    $validStrings = $inputSanitation->getValidationStatus();

    if($validStrings == true){
        $user_id = $_POST['delete'];
    
        if($user_id != "" && $user_id != '%' && $user_id != '%%'){
            $UsersHandler->deleteUserById($user_id);
        }
    }
}