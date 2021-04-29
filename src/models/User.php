<?php
declare(strict_types=1);
require_once '../src/libraries/Database.php';
class User
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }
}