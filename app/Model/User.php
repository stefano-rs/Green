<?php
namespace App\Model;

use Green\Model;

class UserModel extends Model
{

    protected $conn;

    public function __construct()
    {
        $this->conn = Model::getInstance();
    }
    
    public function getAll(){
        return $this->conn->query('SELECT * FROM user');
    }
}  
