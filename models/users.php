<?php

class Users{
    //Basic Crud
    public $createUser = 'INSERT INTO users (name, password, role) VALUES (:name, :password, :role)';

    public $getUsersByIdAndName = "SELECT * FROM users WHERE name LIKE :name AND user_id = :id";
    public $getUsersByNameAndRole = "SELECT * FROM users WHERE name LIKE :name AND role = :role";
    public $getUsersByIdAndNameAndRole = "SELECT * FROM users WHERE name LIKE :name AND user_id = :id AND role = :role";
    public $getUsersByIdAndRole = "SELECT * FROM users WHERE user_id = :id AND role = :role";
    public $getUsersByName = "SELECT * FROM users WHERE name LIKE :name";

    public $updateUserById = "UPDATE users SET name = :name, password = :password, role = :role WHERE `user_id` = :id";
    public $updateUserByIdWithoutPassword = "UPDATE users SET name = :name, role = :role WHERE `user_id` = :id";
    public $updateUserByName = 'UPDATE users SET name = :name, password = :password WHERE name = :currentName';
    public $updateUserByNameWithoutPassword = 'UPDATE users SET name = :name WHERE name = :currentName';

    public $deleteUserById = 'DELETE FROM users WHERE `user_id` = :user_id';
    public $deleteUserByName = 'DELETE FROM users WHERE `name` = :name';
    
    //Advanced queries
    public $checkIfUserExists = 'SELECT name FROM users WHERE name = :name';

    public $checkIfUserIsAdmin = 'SELECT role FROM users WHERE name = :name';
}

$Users = new Users();