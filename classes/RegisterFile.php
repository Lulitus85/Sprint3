<?php

class RegisterFile {

    static public function avatarConstruct($image){
        $name = $image["avatar"]["name"];
        $extension = pathinfo($name,PATHINFO_EXTENSION);
        $sourceFile = $image["avatar"]["tmp_name"];
        $destinationFile = dirname(__DIR__);
        $destinationFile = $destinationFile."/imagenesUsuarios/";
        $avatar = uniqid();
        $destinationFile = $destinationFile.$avatar;
        $destinationFile = $destinationFile.".".$extension;
        move_uploaded_file($sourceFile,$destinationFile);
        $avatar = $avatar.".".$extension; 
        return $avatar; 
    }

    public function userFactory(User $registro, $image){
        $user=[
            "name"=>$registro->getUserName(),
            "email"=>$registro->getEmail(),
            "password"=>password_hash($registro->getPass(),PASSWORD_DEFAULT),
            "avatar"=>$image
        ];
        return $user;
    }

    




}