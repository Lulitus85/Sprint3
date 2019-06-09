<?php

require 'Main.php';

$registerValidator = new Validator();
$registerDatabase = new MySql();
$validator = new Validator();

$errors = [];


if(isset($_SESSION['name']) && $_SERVER['REQUEST_URI'] == '/VinTrash-OOP/register.php'){
    
    header('Location: profile.php');

}

if($_POST){
    
    try {
        $registerValidator->validateName($_POST);        
    }
    catch(Exception $name) {
        $errors['name'] = $name->getMessage();
    }
    try {
        $registerValidator->validateEmail($_POST);
        
    }
    catch(Exception $email) {
        $errors['email'] = $email->getMessage();
    }    

    try {
        $registerValidator->validatePass($_POST);        
    }
    catch(Exception $pass) {
        $errors['pass'] = $pass->getMessage();
    }
    try {
        $registerValidator->validateRePass($_POST);
    }
    catch(Exception $rePass) {
        $errors['pass-ver'] = $rePass->getMessage();
    }
    try {
        $registerValidator->validateDOB($_POST);
    }
    catch(Exception $dob) {
        $errors['dob'] = $dob->getMessage();
    }
   try {
        $registerValidator->validateProfilePic($_FILES);
    }
    catch(Exception $pic) {
        $errors['avatar'] = $pic->getMessage();
    }
   
    if($errors == null) {
        
        $user = $registerDatabase->buildUser($_POST, $_FILES);   
        $registerDatabase->saveInDB($user);
        header('Location: login.php');
        
    }
    
}


