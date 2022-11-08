<?php

// Checks if there is an edit field send with the form
if(isset($_POST['editProduct'])){
    $id = $_POST['editId'];
    $name = $_POST['editName'];
    $description = $_POST['editDescription'];
    $price = $_POST['editPrice'];
    
    $editUser = $pdo->prepare($Products->updateProductById);
    
    $editUser->bindParam(':id', $id);
    $editUser->bindParam(':name', $name);
    $editUser->bindParam(':description', $description);
    $editUser->bindParam(':price', $price);
    $editUser->execute();
}