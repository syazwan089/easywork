<?php namespace App\Controllers;
use App\Models\Bill_model;
use App\Models\Gateway_Model;
use App\Models\Product_model;

class Payment extends BaseController
{
	public function payment($paymentID)
	{        
        $payment = new Bill_Model();
        $data['content'] = $payment->get_detail($paymentID);
        echo view('client/payment',$data);
	}



    public function runbill($paymentID)
    {

        $payment = new Bill_Model();
        $detail = $payment->get_detail($paymentID);

        $toyib = new Gateway_Model();
        $key = $toyib->get();
   
 

        $some_data = array(
            'userSecretKey' => $key['secret_key'],
            'billCode' =>  $detail['bill_no'],
            'billpaymentAmount' =>  $detail['bill_amount'],
            'billpaymentPayorName' =>  $detail['payer_name'],
            'billpaymentPayorPhone'=>$detail['payer_phone'],
            'billpaymentPayorEmail'=>$detail['payer_email']
        
          );  
        
          $curl = curl_init();
          curl_setopt($curl, CURLOPT_POST, 1);
          curl_setopt($curl, CURLOPT_URL, 'https://toyyibpay.com/index.php/api/runBill');  
          curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($curl, CURLOPT_POSTFIELDS, $some_data);
        
          $result = curl_exec($curl);
          $info = curl_getinfo($curl);  
          curl_close($curl);
          $obj = json_decode($result);
          echo $result;
    }


    public function submit()
    {

        
       
    }


    public function view($id)
    {
      
    }
	//---------------------------------------------------------

}
