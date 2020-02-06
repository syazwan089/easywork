<?php namespace App\Models;


use CodeIgniter\Model;

class Gateway_Model extends Model
{

    
        protected $table = 'gateway';
     
        protected $allowedFields = ['category_id', 'secret_key', 'gateway_name'];

        public function get()
        {
            $result = $this->find(1);
            return $result;
        }

        public function semula($data)
        {
            $this->update(1, $data);
            return "yes";
        }
}