<?php

class Auth 
{
    static public function validatePass($pass, $hash){
        
        return password_verify($pass, $hash);
        
    }

    
    /* public function login($email)
    {
        Session::set('email', $email);
        Cookie::set('email', $email, 3600);
    }
 */
      
        public function seteoSesion($user){
            $_SESSION["name"]=$user["user_name"];
            $_SESSION["email"] = $user["user_email"];
            $_SESSION["avatar"]= $user["user_avatar"];
        }
    
        public function seteoCookie($user){
            setcookie("email",$user["user_email"],time()+3600);
            setcookie("pass",$user["user_password"],time()+3600);
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

