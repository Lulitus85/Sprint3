<?php
class BaseMySql extends Database
{
    // 1) conectamos con la base de datos MySQL
    // 2) cargamos en el loader la conexion
    static public function conexion($host,$db_nombre,$usuario,$password,$puerto,$charset){
        try {
            $dsn = "mysql:host=".$host.";"."dbname=".$db_nombre.";"."port=".$puerto.";"."charset=".$charset;
            $baseDatos = new PDO($dsn,$usuario,$password);
            $baseDatos->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $baseDatos;
            // catch: si hay errores que le muestre al usuario de manera amena. 
        } catch (PDOException $errores) {
            echo "No me pude conectar a la BD ". $errores->getmessage();
            exit;
        }
    }

    public function save($userArray){
        // ;
    }
    public function update(){
        // ;
    }
    public function delete(){
        // ;
    }
    public function read(){
        // ;
    }

} 