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



    public function runbill($billcode)
    {
     
    }


    public function submit()
    {

        
       
    }


    public function view($id)
    {
      
    }
	//---------------------------------------------------------

}
