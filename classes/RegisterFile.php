<?php

class RegisterFile {

    public function avatarConstruct($image){
        $name = $image["avatar"]["name"];
        $extension = pathinfo($name,PATHINFO_EXTENSION);
        $sourceFile = $image["avatar"]["tmp_name"];
        $destinationFile = dirname(__DIR__);
        $destinationFile = $destinationFile."/imagenesUsuario/";
        $avatar = uniqid();
        $destinationFile = $destinationFile.$avatar;
        $destinationFile = $destinationFile.".".$extension;
        move_uploaded_file($sourceFile,$destinationFile);
        $avatar = $avatar.".".$extension;
        return $avatar;
    }

    public function userFactory(User $user, $image){
        $user=[
            "name"=>$user->getUserName(),
            "email"=>$user->getEmail(),
            "password"=>password_hash($user->getPass(),PASSWORD_DEFAULT),
            "avatar"=>$image
        ]
        return $user;
    }




}