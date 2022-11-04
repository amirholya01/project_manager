<?php

class Users{
    //Basic Crud
    public $createUser = 'INSERT INTO users (name, password) VALUES (:name, :password)';

    public $getUsersByIdAndName = "SELECT * FROM users WHERE name LIKE :name AND user_id = :id";
    public $getUsersByName = "SELECT * FROM users WHERE name LIKE :name";

    public $updateUserById = "UPDATE users SET name = :name, password = :password WHERE `user_id` = :id";
    public $updateUserByIdWithoutPassword = "UPDATE users SET name = :name WHERE `user_id` = :id";
    public $updateUserByName = 'UPDATE users SET name = :name, password = :password WHERE name = :currentName';
    public $updateUserByNameWithoutPassword = 'UPDATE users SET name = :name WHERE name = :currentName';

    public $deleteUserById = 'DELETE FROM users WHERE `user_id` = :user_id';
    public $deleteUserByName = 'DELETE FROM users WHERE `name` = :name';
    
    //Advanced queries
    public $checkIfUserExists = 'SELECT name FROM users WHERE name = :name';
    }

    $Users = new Users();