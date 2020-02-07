<?php namespace App\Controllers;
use App\Models\Bill_model;
use App\Models\Gateway_Model;

class Bill extends BaseController
{
	public function index()
	{        
        $data['active'] = [
			'Bill' => 'active'
		];

		$user = new Bill_model();

		$data['enc'] = md5('syazwaniwan');

		$data['title'] = 'EasyWork';
		$data['description'] = 'EarsyWork - Manage your salesman';
		$data['content'] = $user->get();
		echo view('templetes/header',$data);
		echo view('pages/bill_view',$data);
		echo view('templetes/footer',$data);
	}



    public function add()
    {
        $data['active'] = [
			'Bill' => 'active'
		];

		$user = new Bill_model();

		$data['enc'] = md5('syazwaniwan');

		$data['title'] = 'EasyWork';
		$data['description'] = 'EarsyWork - Manage your salesman';
		echo view('templetes/header',$data);
		echo view('pages/bill_add',$data);
		echo view('templetes/footer',$data);
    }


    public function submit()
    {
        $inventory = new Bill_model($db);
        $toyib = new Gateway_Model();
        $key = $toyib->get();
        $some_data = array(
            'userSecretKey' => $key['secret_key'],
            'categoryCode' => $key['category_id'],
            'billName' => 'Car Rental WXX123',
            'billDescription' => 'Car Rental WXX123 On Sunday',
            'billPriceSetting'=>0,
            'billPayorInfo'=>1,
            'billAmount'=>100,
            'billReturnUrl'=>'http://bizapp.my',
            'billCallbackUrl'=>'http://bizapp.my/paystatus',
            'billExternalReferenceNo' => 'AFR341DFI',
            'billTo'=>'John Doe',
            'billEmail'=>'jd@gmail.com',
            'billPhone'=>'0194342411',
            'billSplitPayment'=>0,
            'billSplitPaymentArgs'=>'',
            'billPaymentChannel'=>'0',
            'billDisplayMerchant'=>1,
            'billPaymentCharge'=>1,
            'billContentEmail'=>'blablalba',
            'billAdditionalField' => $json
          );  
        
          $curl = curl_init();
          curl_setopt($curl, CURLOPT_POST, 1);
          curl_setopt($curl, CURLOPT_URL, 'https://toyyibpay.com/index.php/api/createBill');  
          curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($curl, CURLOPT_POSTFIELDS, $some_data);
        
          $result = curl_exec($curl);
          $info = curl_getinfo($curl);  
          curl_close($curl);
          $obj = json_decode($result);
        




		$data = [
            'bill_no' =>    $obj,
            'bill_description' =>  '1',
            'bill_amount' =>  $this->request->getVar('amount'),
            'payer_organization' =>  $this->request->getVar('amount'),
            'payer_phone' =>  $this->request->getVar('amount'),
            'payer_email' =>  $this->request->getVar('amount'),
            'payment_status' =>  $this->request->getVar('amount'),
            'created_at' =>  $this->request->getVar('amount'),
            'salesman_id' =>  $this->request->getVar('amount'),
			'payer_name' =>$this->request->getVar('detail')
		];
		
		$inventory->masuk($data);
		
		return redirect('/');
    }


    public function view($id)
    {
        helper('array');
        
        $data['active'] = [
			'Employee' => 'active'
		];

		$user = new Bill_model();

		$data['enc'] = md5('syazwaniwan');

		$data['title'] = 'EasyWork';
		$data['description'] = 'EarsyWork - Manage your salesman';
		$data['content'] = $user->detail($id);

		echo view('templetes/header',$data);
		echo view('pages/employee_detail_view',$data);
		echo view('templetes/footer',$data);
    }
	//--------------------------------------------------------------------


	



}
