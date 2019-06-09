<?php

class User implements \JsonSerializable{

    private $userName;
    private $email;
    private $password;    
    private $profilePic;
    private $dob;

    public function __construct(string $userName, string $email, string $password, string $profilePic, string $dob){

             $this->userName = $userName;
             $this->email = $email;
             $this->password = $password;        
             $this->profilePic = $profilePic;
             $this->dob = $dob;

    }

    public function jsonSerialize(){

        $user = get_object_vars($this);

        return $user;
    }

    public function getUserName(){
        return $this->userName;
    }
    public function getEmail(){
        return $this->email;
    }

    public function getPassword(){
        return $this->password;
    }
   
    public function getProfilePic(){
        return $this->profilePic;
    }
    public function getDob(){
        return $this->dob;
    }
    
    public function setUserName($newUserName){
        $this->userName = $newUserName;
   }

    public function setEmail($newEmail){
        $this->email = $newEmail;
    }

    public function setProfilePic($newProfilePic){
        $this->profilePic = $newProfilePic;
    }
    
    public function setDob($newDob){
        $this->dob = $newDob;
    }    

}