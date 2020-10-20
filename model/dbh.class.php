<?php

class Dbh {
    private $serverName = "localhost";
    private $username = "root";
    private $password = "";
    private $db ="learningphp";

    private $stmt, $dbhandler;

    public function __construct()
    {
        $dsn = "mysql:host=". $this->serverName. ";dbname=". $this->db; 
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );
        try{
            $this->dbhandler = new PDO($dsn, $this->username, $this->password, $option);
        }
        catch (Exception $e)
        {
            var_dump( "Database connection could not be established due to ".$e->getMessage());
        }
    }


   /*  private function connect()
    {
        $dsn = "mysql:host=". $this->serverName.";dbname=". $this->db;
        $pdo = new PDO($dsn, $this->username, $this->password);
        $pdo->setAttribute(PDO::ATTR_FETCH_DEFAULT_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    } */

    public function query($query)
    {
        $this->stmt = $this->dbhandler->prepare($query);
    }

    public function bind($param, $value, $type=null)
    {
        if(is_null(type))
        {
            switch(true){
                case is_int($value):
                    $type = PDO::PARAM_INT;
                break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                break;
                default:
                    $type = PDO::PARAM_STR;
                break;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }

    //execute statement
    public function execute()
    {
        $this->stmt->execute();
        return true;
    }

    public function fetch()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function fetchAll()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}