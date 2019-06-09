<?php

require 'Main.php';

$loginValidator = new Validator();
$loginSession = new Session();
$user = new MySql();
$errors = [];

if (isset($_SESSION['name']) && $_SERVER['REQUEST_URI'] == '/VinTrash-OOP/login.php'){
    
    header('Location: profile.php');

}

if($_POST){

    try{        
        $loginValidator->validateLogin($_POST);
    }
    catch(Exception $user){

        $errors['user'] = $user->getMessage();
        
    }

    if($errors == null){
        session_start();
        $loginSession->sessionData($user->searchUserInDB($_POST), $_POST);
        $loginSession->rememberMe($_POST);    
        header('Location: profile.php');
    }
}


