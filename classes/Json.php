<?php

require 'DataBase.php';

class Json implements DataBase{

private $userDB = [];

    public function dbSearch(){
         
        $jsonArray = explode(PHP_EOL, file_get_contents("usuarios.json"));
        array_pop($jsonArray);

        foreach ($jsonArray as $user) {
            $usersDB[] = json_decode($user, true);
        }

        return $usersDB;
    }
    


    public function buildAvatar($image){
        
        $fileExtension = pathinfo($image["avatar"]["name"], PATHINFO_EXTENSION);
        $sourceFile = $image["avatar"]["tmp_name"];           
        $userAvatar = uniqid();
        $destinationPath = dirname(__DIR__)."\\userimages\\".$userAvatar.".".$fileExtension;        
        move_uploaded_file($sourceFile, $destinationPath);   
        $relPath = "userimages/".$userAvatar.".".$fileExtension;    
        return $relPath;
    }

    public function buildUser($data, $image){

        $name = trim($data['name']);
        $email = trim($data['email']);
        $pass = password_hash(trim($data['pass']), PASSWORD_DEFAULT);
        $avatar = $this->buildAvatar($image);
        $dob = $data['DOBDay']."-".$data['DOBMonth']."-".$data['DOBYear'];
        $user = new User($name, $email, $pass, $avatar, $dob);
        return $user;
        
    }

    public function saveInDB($user){
        
        $jsonUser = json_encode($user);    
        file_put_contents('usuarios.json', $jsonUser.PHP_EOL, FILE_APPEND);
    }

    public function searchUserInDB($data){
        
        $userDb = $this->dbSearch();
       
        foreach ($userDb as $user){
            if($user['email'] == $data['name'] 
            || $user['userName'] == $data['name']
            || strtolower($user['userName']) == strtolower($data['name'])){
                return $user;
            }
        }
        return null;
    }

}