<?php

require 'helpers.php';
require 'classes/User.php';
require 'classes/Validator.php';
require 'classes/RegisterFile.php';
$validator = new Validator();
$register = new RegisterFile();
$intenso = new Json('usuario.json');

?>