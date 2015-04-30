<?php
namespace Green;

class Model extends \mysqli
{

    protected static $host = 'localhost';
    protected static $user = 'root';
    protected static $password = '';
    protected static $database = 'green';

    private static $instance = null;

    private function __construct()
    {
        parent::__construct(self::$host, self::$user, self::$password, self::$database);
    }

    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}