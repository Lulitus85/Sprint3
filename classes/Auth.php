<?php

class Auth 
{
    public function validatePass($pass, $hash){
        
        return password_verify($pass, $hash);
    }

    
    /* public function login($email)
    {
        Session::set('email', $email);
        Cookie::set('email', $email, 3600);
    }
 */
      
        public function seteoSesion($user){
            $_SESSION["name"]=$user["name"];
            $_SESSION["email"] = $user["email"];
            $_SESSION["avatar"]= $user["avatar"];
        }
    
        public function seteoCookie($user){
            setcookie("email",$user["email"],time()+3600);
            setcookie("pass",$user["pass"],time()+3600);
        }
    
        public function validarUsuario(){
            if(isset($_SESSION["email"])){
                return true;
            }elseif (isset($_COOKIE["email"])) {
                $_SESSION["email"]=$_COOKIE["email"];
                return true;
            }else{
                return false;
            }
        }
    }    

