<?php
    /* 📒 */

if( isset( $_POST['createUser'] ) ){
    $name = $_POST['createName'];
    $password = $_POST['createpassword'];

    
    $userCheck = $pdo->prepare($Users->checkIfUserExists);
    $userCheck->bindParam(':name', $name);
    $userCheck->execute();

    $data = $userCheck->fetch();

    $validName = true;
    if(isset($data[0])){
        $validName = false;
    }

    if($validName && $name != "" && $name != null){
        $createUser = $pdo->prepare($Users->createUser);
        $createUser->bindParam(':name', $name);
        $createUser->bindParam(':password', $password);
        $createUser->execute();
    }
}
