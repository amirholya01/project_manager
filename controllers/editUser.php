<?php

// Checks if there is an edit field send with the form
if(isset($_POST['editUser'])){
    $id = $inputSanitation->numberSanitice($_POST ['editId']);
    $name = $inputSanitation->sanitice($_POST ['editName']);
    $role = $inputSanitation->numberSanitice($_POST ['editRole']);
    $password;
    
    // Checks if there is submited a password
    if( isset($_POST['password']) ){
        $password = $inputSanitation->sanitice($_POST ['password']);
    }
    
    $validStrings = $inputSanitation->getValidationStatus();

    if($validStrings == true){
        //Sends to db
        $UsersHandler->editUser($id, $name, $role, $password);
    }

}