<?php

require 'DataBase.php';

class MySql implements DataBase {

    public $pdo;
    private $dsn = "mysql:host=127.0.0.1;dbname=vintrash_db;port=3306";
    private $user = "root";
    private $pass = "";
    

    public function __construct() {

        $this->pdo = new PDO($this->dsn, $this->user, $this->pass);
    }

    public function dbSearch() {        

        $usersDB = [];
        $sqlStatement = "select*from users";
        $selectAll = $this->pdo->prepare($sqlStatement);
        $selectAll->execute();
        $result = $selectAll->fetchAll(PDO::FETCH_ASSOC);

        foreach ($result as $user) {
            array_push($usersDB, $user);
            
        }

        return $usersDB;

    }

    public function buildAvatar($image) {

        $fileExtension = pathinfo($image["avatar"]["name"], PATHINFO_EXTENSION);
        $sourceFile = $image["avatar"]["tmp_name"];           
        $userAvatar = uniqid();
        $destinationPath = dirname(__DIR__)."\\userimages\\".$userAvatar.".".$fileExtension;        
        move_uploaded_file($sourceFile, $destinationPath);   
        $relPath = "userimages/".$userAvatar.".".$fileExtension;    
        return $relPath;

    }

    public function buildUser($data, $image) {

        $name = trim($data['name']);
        $email = trim($data['email']);
        $pass = password_hash(trim($data['pass']), PASSWORD_DEFAULT);
        $avatar = $this->buildAvatar($image);
        date_default_timezone_set('America/Argentina/Buenos_Aires');
        $dob = date_create($data['dob']);        
        $dob = date_format($dob,"Y-m-d");
        $user = new User($name, $email, $pass, $avatar, $dob);
        return $user;

    }

    public function saveInDB($user) {
        
        $sqlInsert = $this
                    ->pdo
                    ->prepare(

                        'insert into 
                        users (username, email, password, profilepic, dateofbirth) 
                        values (?, ?, ?, ?, ?)'
                    );

        $bindings = [

            $user->getUserName(),
            $user->getEmail(),
            $user->getPassword(),
            $user->getProfilePic(),
            $user->getDob()
            
        ];

        $sqlInsert->execute($bindings);
       
    }

    public function searchUserInDB($data) {

        $userDb = $this->dbSearch();
        
       
        foreach ($userDb as $user){
            
            if($user['email'] == $data['name'] 
            || $user['username'] == $data['name']
            || strtolower($user['username']) == strtolower($data['name'])){
                
                return $user;
            }
        }

        return null;
    }

}