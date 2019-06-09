<?php

require 'Main.php';

$session = new Session();

session_start();

if(!isset($_SESSION['name']) && $_SERVER['REQUEST_URI'] == '/VinTrash-OOP/profile.php'){
    
    header('Location: login.php');

}

if(isset($_SESSION['name']) && $_SERVER['REQUEST_URI'] == '/VinTrash-OOP/login.php'){
    
    header('Location: login.php');

}

if (count($_SESSION) != 0){

    include 'includes/__nav_logged.php';
}

else {
    
    include 'includes/__nav.php';

    }

if($_SERVER['REQUEST_URI'] == '/VinTrash-OOP/logout.php'){

    $session->endSession();
    header('location: Login.php');
    
}
