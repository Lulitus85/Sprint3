<?php

class Validator
{
    public function validate(User $user){
        $errors = [];

        $userName=trim($user->getUserName());
        if(isset($userName)){
            if(empty($userName)){
                $errors["userName"] = "El campo <b> Usuario </b> no puede estar vacío";
            }
        }

        $email=trim($user->getEmail());
        if(isset($email)){
            if(empty($email)){
                $errors["email"] = "El campo <b> Correo Electrónico </b> no puede estar vacío";
            } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors["email"] = "El campo <b> Correo Electrónico </b> no es válido";
            }
        }

        $pass=trim($user->getPass());
        if(isset($pass)){
            if($pass==""){
                $errors["pass"] = "El campo <b> Contraseña </b> es obligatorio";
            } else if(strlen($pass) < 6){
                $errors["pass"] = "La <b> Contraseña </b> no puede ser menor a 6 dígitos y debe tener al menos una letra minúscula, una mayúscula y un número";
            } else if(!preg_match('`[a-z]`',$pass) || !preg_match('`[A-Z]`',$pass)  || !preg_match('`[0-9]`',$pass)){
                $errors["pass"] = "La <b> Contraseña </b> no puede ser menor a 6 dígitos y <b> debe tener al menos una letra minúscula, una mayúscula y un número </b>";
            }
        }    

        $rPass=trim($user->getRpass());
        if(isset($rPass)){
            if($pass != $rPass){
                $errors["pass-ver"]="Las Contraseñas no coinciden";
            }
        }

        //edad
        if(!strcmp($_POST["DOBDay"],"Day") || !strcmp($_POST["DOBMonth"],"Month") || !strcmp($_POST["DOBYear"],"Year")){
            $errors["Year"] = "Debe completar su <b> Fecha de Nacimiento </b>";
        } elseif($_POST["DOBYear"] >= (date("Y")-18)){
            $errors["Year"] = "Por políticas de la empresa, sólo se habilitan usuarios <b> mayores de edad </b>";
        }

        $userFile = $user->getAvatar(); 
        if($userFile != null){ 
            if($_FILES["avatar"]["error"] != 0){
                $errors["avatar"] = "Por favor, suba su <b> Avatar </b>";     
            }            
            $nameFile = $_FILES["avatar"]["name"];
            $extension = pathinfo($nameFile,PATHINFO_EXTENSION);
            if($extension != "png" && $extension != "jpg" && $extension != "jpeg" && $extension != "gif"){
                $errors["avatar"] = "La imagen seleccionada debe ser <b> jpg, jpeg, png o gif </b>";
            }
            
            
        }
        return $errors;
    }


    public function loginValidate(User $user)
    {
        $errors = array();

        $email=trim($user->getEmail());
        if(isset($email)){
            if($email == ""){
                $errors["email"] = "El campo <b> Correo Electrónico </b> no puede estar vacío";
            }
        }

        $pass=trim($user->getPass());
        if(isset($pass)){
            if(empty($pass)){
                $errors["pass"] = "El campo <b> Contraseña </b> es obligatorio";
            }

        }

        return $errors;

    }

}