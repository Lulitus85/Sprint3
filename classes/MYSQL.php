<?php

class DBMySQL extends Database
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function save($data) 
    {
        $stmt = $this->pdo->prepare("INSERT INTO users (name, email, password, avatar) VALUES (:name, :email, :password, :avatar)");

        $stmt->bindParam(':name', $data['name'], PDO::PARAM_STR);
        $stmt->bindParam(':email', $data['email'], PDO::PARAM_STR);
        $stmt->bindParam(':password', $data['password'], PDO::PARAM_STR);
        $stmt->bindParam(':avatar', $data['avatar'], PDO::PARAM_STR);

        $stmt->execute();

    }
    public function searchEmail($email)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);

        $email = $stmt->fetch(PDO::FETCH_ASSOC);

        return $email;
    }

    public function update()
    {

    }
    public function delete()
    {

    }
    public function read()
    {

    }
}