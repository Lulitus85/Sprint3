<?php

require 'Main.php';

$session = new Session();

session_start();

if(!isset($_SESSION['name']) && preg_match('/\bprofile.php\b/', $_SERVER['REQUEST_URI'])){
    
    header('Location: login.php');

}

if(isset($_SESSION['name']) && preg_match('/\blogin.php\b/', $_SERVER['REQUEST_URI'])){
    
    header('Location: login.php');

}

if (count($_SESSION) != 0){

    include 'includes/__nav_logged.php';
}

else {
    
    include 'includes/__nav.php';

    }

if(preg_match('/\blogout.php\b/', $_SERVER['REQUEST_URI'])){
    
    $session->endSession();
    header('location: login.php');
    
}
