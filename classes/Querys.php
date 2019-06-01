<?php

class Querys{
    static public function saveUser(User $user, $tabla, $pdo)
    //le voy a pasar el objeto usuario, la tabla donde quiero guardarlo y la conexión a la base de datos que corresponde
    {
        $insert_usuario = "INSERT INTO $tabla (user_name, user_email, user_password, user_avatar, user_date) values (:user_name, :user_email, :user_password, :user_avatar, :user_date)";
        $stmt=$pdo->prepare($insert_usuario);
        $stmt->bindParam(':user_name',$_POST['userName']);
        $stmt->bindParam(':user_email',$_POST['email']);
        $pass = password_hash($_POST['pass'], PASSWORD_BCRYPT);
        $stmt->bindParam(':user_password',$pass);
        
        $avatar = RegisterFile::avatarConstruct($user->getAvatar());
        
        $stmt->bindParam(':user_avatar',$avatar);
        $stmt->bindParam(':user_date',$_POST['DOBYear']);

        $stmt->execute();


        


    }
}