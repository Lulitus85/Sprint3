<?php

interface DataBase {

    public function dbSearch();

    public function buildAvatar($image);

    public function buildUser($data, $image);

    public function saveInDB($user);

    public function searchUserInDB($data);

    
}