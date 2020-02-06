<?php namespace App\Models;


use CodeIgniter\Model;

class Employee_Model extends Model
{

    
        protected $table = 'users';
     
        protected $allowedFields = ['emp_id', 'full_name', 'hash_password','city','image','level','created_at'];

        public function get()
        {
            $this->where('level', 2);
            $this->join('level','level.id = level');
            $result = $this->findAll();
            return $result;
        }

        public function detail($id)
        {
            $this->where('level', 2);
            $this->join('level','level.id = level');
            $result = $this->find($id);
            return $result;
        }

        public function semula($data)
        {
            $this->update(1, $data);
            return "yes";
        }
}