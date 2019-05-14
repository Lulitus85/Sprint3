<?php

class Json extends Database 
{
    private $file;

    public function __construct($file)
    {
        $this->file=$file;
    }

    public function setFile($file)
    {
        $this->file=$file;
    }

    public function getFile()
    {
        return $this->file;
    }

    public function save($userArray)
    {
        $jsonUsuario = json_encode($userArray); //encripta el archivo y lo mete dentro de la variable
        file_put_contents($this->file, $jsonUsuario. PHP_EOL, FILE_APPEND);
    }

    public function read()
    {
        $results=array();
        $explodes=explode(PHP_EOL, file_get_contents($this->file));
        array_pop($explodes);

        foreach($explodes as $value){
            $results[]=json_decode($explode, true);
        }
        return $results;
    }

    public function searchEmail($email) //login
    {
        $result=$this->read();
    
        foreach($result as $user)
        {
            if($user['email']==$email)
            {
                return $user;
            }
        }

    }





}