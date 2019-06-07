<?php

class Querys{
    static public function saveUser(User $user, $tabla, $pdo)
    //le voy a pasar el objeto usuario, la tabla donde quiero guardarlo y la conexión a la base de datos que corresponde
    {
        $insert_usuario = "INSERT INTO $tabla (user_name, user_email, user_password, user_avatar, user_date) values (:user_name, :user_email, :user_password, :user_avatar, :user_date)";
        $stmt=$pdo->prepare($insert_usuario);
        $stmt->bindParam(':user_name',$_POST['userName']);
        $stmt->bindParam(':user_email',$_POST['email']);
        
        $stmt->bindParam(':user_password',password_hash($_POST['pass'],PASSWORD_DEFAULT));
        
        $avatar = RegisterFile::avatarConstruct($user->getAvatar());
        
        $stmt->bindParam(':user_avatar',$avatar);
        $stmt->bindParam(':user_date',$_POST['fechaNac']);

        $stmt->execute();

    }

    //para leer la base de datos, trae toda la info de una tabla --> ver $random en loader.php.
    
    static public function selectAll($tabla, $pdo){
        $search="SELECT * FROM $tabla";
        $result= $pdo->prepare($search);
        $result->execute();
        $info = $result->fetchAll(PDO::FETCH_ASSOC);
        return $info; 
    }



}