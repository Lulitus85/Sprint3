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

    public function update(){
        //
    }
    public function delete(){
        //
    }


    public function save($userArray)
    {
        $jsonUsuario = json_encode($userArray); //encripta el archivo y lo mete dentro de la variable
        file_put_contents($this->file, $jsonUsuario. PHP_EOL, FILE_APPEND);
    }

    public function read()
    {
        if(file_exists($this->file)){
            $baseDatos= file_get_contents($this->file);
            $baseDatos = explode(PHP_EOL,$baseDatos);
            //Aquí saco el ultimo registro, el cual está en blanco
            array_pop($baseDatos);
            //Aquí recooro el array y creo mi array con todos los usuarios 
            foreach ($baseDatos as $usuarios) {
                $arrayUsuarios[]= json_decode($usuarios,true);
            }
            //Aquí retorno el array de usuarios con todos sus datos
            return $arrayUsuarios;
        }else{
            return null;
        } 
    }

    
    public function searchEmail($email) //register/login
    {
        $result = $this->read();
        if($result !== null){
            foreach($result as $user)
            {
                if($email===$user['email'])
                {
                    return $user;
                }
            }
        }
        return null;

      }






}