<?php namespace App\Models;

use CodeIgniter\Model;

class User_Model extends Model
{
    protected $table = 'users';


    public function getuser()
    {     
        $this->join('level', 'level.id = users.level');
        return $this->findAll();
    }

}