<?php

class Session {

    public function sessionData($user, $data){
        
        $_SESSION['name']=$user['username'];
        $_SESSION['email']=$user['email'];   
        $_SESSION['avatar']=$user['profilepic'];

        return $_SESSION;
    }

    public function rememberMe($data){
        
        if(isset($data["remember"])){

            setcookie("name", $data["name"], time()+86400);
            setcookie("pass", $data["pass"], time()+86400);
        }
        
    }

    public function endSession(){

        session_start();
        session_destroy();    
        
    }
    
    public function cookieDestroy(){

        setcookie("name", "", time()- 1);
        setcookie("pass", "", time()- 1);
    }
    
}