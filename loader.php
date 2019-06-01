<?php


require 'helpers.php';
require 'classes/User.php';
require 'classes/Validator.php';
require 'classes/RegisterFile.php';
require 'classes/Database.php';
//require 'classes/Json.php';
require 'classes/Auth.php';
require 'classes/MySql.php';
require 'classes/Querys.php';

//Declaro mis variables
$host = "localhost";
$bd_nombre = "vintrash_db";
$usuario = "root";
$password = "";
$puerto = "3306";
$charset = "utf8mb4";
//Ojo: Para los que trabajan con MAC: deben colocar el puerto: 8889

$pdo = BaseMySql::conexion($host,$bd_nombre,$usuario,$password,$puerto,$charset);

session_start();

$validator = new Validator();
$register = new RegisterFile();
//$intenso = new Json('usuario.json');
$auth = new Auth();

?>