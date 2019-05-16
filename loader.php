<?php


require 'helpers.php';
require 'classes/User.php';
require 'classes/Validator.php';
require 'classes/RegisterFile.php';
require 'classes/Database.php';
require 'classes/Json.php';
require 'classes/Auth.php';

session_start();

$validator = new Validator();
$register = new RegisterFile();
$intenso = new Json('usuario.json');
$auth = new Auth();


?>