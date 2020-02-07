<?php namespace App\Models;


use CodeIgniter\Model;

class Product_Model extends Model
{

    
        protected $table = 'inventory';
     
        protected $allowedFields = ['product_name', 'product_amount', 'product_detail','created_by_id','created_at'];

        public function get()
        {
   
            //$this->join('users','users.id = created_by_id');
            $result = $this->findAll();
            return $result;
        }

        public function detail($id)
        {
            $this->join('users','users.id = created_by_id');
            $result = $this->find($id);
            return $result;
        }

        public function semula($data)
        {
            $this->update(1, $data);
            return "yes";
        }


        public function masuk($data)
        {
            $this->insert($data);
            return "yes";
        }

}