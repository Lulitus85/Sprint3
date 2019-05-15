<?php

class User 
{
    private $userName;
    private $email;
    private $pass;
    private $rPass;
    private $avatar;
    private $year;

    public function __construct($userName=null,  $email, $pass, $rPass=null, $avatar=null, $year=null) 
    {
        $this->userName = $userName;     
        $this->email = $email;
        $this->pass = $pass;
        $this->rPass=$rPass;
        $this->avatar=$avatar;
        $this->year=$year;
    }

    //SETS//

    public function setUserName($userName){
        $this->userName = $userName;
    }
        
    public function setEmail($email){
        $this->email = $email;
    }

    public function setPass($pass){
        $this->pass = $pass;
    }

    public function setRpass($rPass){
        $this->rPass = $rPass;
    }

    public function setAvatar($avatar){
        $this->avatar = $avatar;
    }

    public function setYear($year){
        $this->year = $year;
    }

    //GETS//

    public function getUserName(){
        return $this->userName;
    }
        
    public function getEmail(){
        return $this->email;
    }

    public function getPass(){
        return $this->pass;
    }

    public function getRpass(){
        return $this->rPass;
    }

    public function getAvatar(){
        return $this->avatar;
    }

    public function getYear(){
        return $this->year;
    }

    

}