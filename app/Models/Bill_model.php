<?php namespace App\Models;


use CodeIgniter\Model;

class Bill_Model extends Model
{

    
        protected $table = 'bills';
     
        protected $allowedFields = ['bill_no', 'product_id', 'product_name','payment_url', 'bill_description','bill_amount','payer_name','payer_organization','payer_phone','payer_email','payment_status','created_at','salesman_id'];

        public function get()
        {
     
            $this->join('users','users.id = salesman_id');
     
      
            $result = $this->findAll();
            return $result;
        }


        public function get_detail($paymentID)
        { 
         
            $this->join('users','users.id = salesman_id');
            $result =  $this->where('payment_url', $paymentID)->first();
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

        public function baru($data)
        {
            $this->insert($data);
            return "yes";
        }

        
}