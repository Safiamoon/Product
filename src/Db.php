<?php

abstract class Db
{
    protected $connexion; //détient l'instance PDO connectée à la BDD
    private const HOST = '127.0.0.1';
    private const DB   = 'safia_product';
    private const USER = 'sadmin';
    private const PASS = 'safiasql';
    private const CHARSET = 'utf8mb4';

    private const DSN = "mysql:host=". self :: HOST .
                        ";dbname=" . self :: DB .
                        ";charset=" . self :: CHARSET;
    

    public function __construsct()
    {
        try{
            $this ->connection = new PDO(self :: DSN, self ::USER, self::PASS);

        } catch(\PDOException $e){
            throw new \PDOException($e->getMessage(), $e->getCode());

        }
            

    }
    public function getConnection(): PDO
    {
        return $this->connection;

    }





}

