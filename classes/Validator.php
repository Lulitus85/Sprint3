<?php

class Validator {
    
    public $user;

    public function __construct() {
    
        $this->user = new MySql();
    }

    public function validateName($data) {       
        
        if(empty($data['name'])){
            throw new Exception('El usuario es obligatorio');
        }

        elseif(strlen($data['name']) < 4) {
            throw new Exception('El nombre de usuario debe tener al menos 4 caracteres');
        }

        foreach ($this->user->dbSearch() as $user) {
            
            if($user['username'] == $data['name']){                
                throw new Exception('El nombre de usuario ingresado ya se encuentra registrado');
            }
            
        }
        
    }

    public function validateEmail($data) {    

        if(empty($data['email'])){
            throw new Exception('El email es obligatorio');
        }
        
        elseif(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
            throw new Exception('El email no es valido');
        }

        foreach ($this->user->dbSearch() as $user){
            
            if($user['email'] == $data['email']){
                throw new Exception('El email ingresado ya se encuentra registrado');                
            }
            
        }
        
    }    

    public function validatePass($data){

        if(empty($data['pass'])) {
            throw new Exception('La contraseña es obligatoria');
        }

        elseif(!(strlen($data['pass']) >= 6) || !(strlen($data['pass']) <= 22)){
            throw new Exception('La contraseña debe tener entre 6 y 22 caracteres.');
        }

        elseif(!preg_match('`[a-z]`', $data['pass']) || !preg_match('`[A-Z]`', $data['pass']) || !preg_match('`[0-9]`', $data['pass'])){
            throw new Exception('La contraseña debe tener al menos una letra minúscula, una mayúscula y un número');
        }
        
    }

    public function validateRePass($data){

        if(strcmp($data['pass-ver'], $data['pass'])){

            throw new Exception('Las contraseñas no coinciden.');
        }
    }

    public function validateDOB($data){    
        
        $dob = strtotime($data['dob']);                
        $age = floor((time()-$dob)/(60*60*24*365.25));         
        
        if($data['dob'] == null) {
                
            throw new Exception('Ingrese su fecha de nacimiento por favor');
        }
        
        elseif($age < 18){
            throw new Exception('Debes ser mayor de edad para ingresar');
        }
        
    }       
       
    public function validateProfilePic($file) {
            
            $fileType = substr($file['avatar']['type'], 0, 5);
            
            if($fileType == 'image' || $fileType == 'image' || $fileType == null){
                                
            switch($file['avatar']['error']) {

                case 1:
                throw new Exception('La imagen es demasiado grande');
                break;
                case 2:
                throw new Exception('La imagen es demasiado grande');
                break;
                case 3:
                throw new Exception('Hubo un error al cargar el archivo');
                break;
                case 4:
                throw new Exception('Debes seleccionar una foto de perfil');
                break;
                case 7:
                throw new Exception('Hubo un error al cargar el archivo');
                break;
                default: '';

            }
        }

        else {
            
            throw new Exception('Tipo de archivo no valido, este debe ser JPG o PNG.');
        }
    }

    public function validateLogin($data){
        
        $user = $this->user->searchUserInDB($data);

        if(empty($data['name']) || empty($data['pass'])){

            throw new Exception('Debes ingresar tu usuario y contraseña para continuar');
        }

        elseif($user == null){
            
            throw new Exception('Usuario no registrado');
        }

        elseif(!password_verify($data['pass'], $user['password'])){

            throw new Exception('Alguno de los datos no es correcto');
        }

    }

    public function inputUser($input) { 

        if(isset($_POST[$input])) {

            return $_POST[$input];
        }
    }
    

}
