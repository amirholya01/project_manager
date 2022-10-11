<?php

class Users{
    //Basic Crud
    public $createUser = "INSERT INTO users (name, password) VALUES ('$name', '$password')";

    public $readAllUsers = "SELECT * FROM users";

    public $updateUser = "UPDATE users SET name = '$name', password = '$name' WHERE 'user_id' = '$user_id'";

    public $deleteUser = "DELETE FROM users WHERE 'user_id' = '$user_id'";
    
    //Advanced queries
    public $checkIfUserExists = "SELECT name FROM users WHERE name = $name";
    
}