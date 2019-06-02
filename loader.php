<?php


require 'helpers.php';
require 'classes/User.php';
require 'classes/Validator.php';
require 'classes/RegisterFile.php';
require 'classes/Database.php';
require 'classes/Json.php';
require 'classes/Auth.php';
require 'classes/MYSQLConnector.php';
require 'classes/MYSQL.php';

session_start();
$pdo = MYSQLConnector::make();

$validator = new Validator();
$register = new RegisterFile();
//$intenso = new Json('usuario.json');//
$intenso = new DBMySQL($pdo);
$auth = new Auth();


?>