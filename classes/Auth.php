<?php

class Auth 
{
    public function validatePass($pass, $hash){
        
        password_verify($pass, $hash);
    }

}

