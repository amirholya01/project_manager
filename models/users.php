<?php

class Users{
    //Basic Crud
    public $createUser = 'INSERT INTO users (name, password) VALUES (:name, :password)';

    public $readAllUsers = 'SELECT * FROM users';

    public $updateUserById = 'UPDATE users SET name = :name, password = :password WHERE `user_id` = :user_id';
    public $updateUserByName = 'UPDATE users SET name = :name, password = :password WHERE name = :currentName';
    public $updateUserByNameWithoutPassword = 'UPDATE users SET name = :name WHERE name = :currentName';

    public $deleteUser = 'DELETE FROM users WHERE `user_id` = :user_id';
    
    //Advanced queries
    public $checkIfUserExists = 'SELECT name FROM users WHERE name = :name';
    }