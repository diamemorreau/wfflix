<?php

class BaseModel
{
    protected PDO $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=wfflix',
                'root',
                'Welcome123',
                [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
        } catch (PDOException $e) {
            die(var_dump($e->getMessage()));
        }
    }
}