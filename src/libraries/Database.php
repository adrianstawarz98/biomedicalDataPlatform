<?php
declare(strict_types=1);

class Database
{
    private $dsn = DB_DSN;
    private $dbUser = DB_USER;
    private $dbPass = DB_PASS;
    private $statement;
    private $dbHandler;
    private $errors;

    public function __construct()
    {
        $options = [PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION];
        try {
            $this->dbHandler = new PDO($this->dsn,$this->dbUser,$this->dbPass,$options);
        } catch (PDOException $exception) {
            $this->errors = $exception->getMessage();
            echo $this->errors;
        }
    }
}