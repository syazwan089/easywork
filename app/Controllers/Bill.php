<?php namespace App\Controllers;
use App\Models\Bill_model;
use App\Models\Gateway_Model;
use App\Models\Product_model;

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
        $product = new Product_model();
		$data['content'] = $product->get();
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




        $radio = $this->request->getVar('radio');
        $select =  $this->request->getVar('select');



            if($radio == 'option1')
            {

                $product = new Product_model();
                $pro = $product->detail($select);
                
                $bamount = $pro['product_amount'];
                 $realAmount = $bamount * 100;

              

                $some_data = array(
                    'userSecretKey' => $key['secret_key'],
                    'categoryCode' => $key['category_id'],
                    'billName' =>  $pro['product_name'],
                    'billDescription' =>   $pro['product_detail'],
                    'billPriceSetting'=>0,
                    'billPayorInfo'=>1,
                    'billAmount'=>  (int)$realAmount,
                    'billReturnUrl'=>'http://bizapp.my',
                    'billCallbackUrl'=>'http://bizapp.my/paystatus',
                    'billExternalReferenceNo' => 'AFR341DFI',
                    'billTo'=>$this->request->getVar('cus_name'),
                    'billEmail'=>$this->request->getVar('cus_email'),
                    'billPhone'=>$this->request->getVar('cus_phone'),
                    'billSplitPayment'=>0,
                    'billSplitPaymentArgs'=>'',
                    'billPaymentChannel'=>'0',
                    'billDisplayMerchant'=>1,
                    'billPaymentCharge'=>1,
                    'billPaymentChannel' => 2
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
                    'bill_no' => $obj[0]->BillCode,
                    'bill_description' =>  $this->request->getVar('bill_detail'),
                    'bill_amount' =>   $bamount,
                    'payer_organization' =>  $this->request->getVar('cus_orga'),
                    'payer_phone' =>  $this->request->getVar('cus_phone'),
                    'payer_email' =>  $this->request->getVar('cus_email'),
                    'payment_status' => 'pending',
                    'salesman_id' =>  '1',
                    'payer_name' =>$this->request->getVar('cus_name')
                ];
                
                $inventory->baru($data);
                
                return redirect('/');
      
            }


            else{


                
        $bamount =  $this->request->getVar('amount');
        $realAmount = $bamount * 100;

                $some_data = array(
                    'userSecretKey' => $key['secret_key'],
                    'categoryCode' => $key['category_id'],
                    'billName' =>  $this->request->getVar('bill_name'),
                    'billDescription' =>  $this->request->getVar('amount'),
                    'billPriceSetting'=>0,
                    'billPayorInfo'=>1,
                    'billAmount'=> (int)$realAmount,
                    'billReturnUrl'=>'http://bizapp.my',
                    'billCallbackUrl'=>'http://bizapp.my/paystatus',
                    'billExternalReferenceNo' => 'AFR341DFI',
                    'billTo'=>$this->request->getVar('cus_name'),
                    'billEmail'=>$this->request->getVar('cus_email'),
                    'billPhone'=>$this->request->getVar('cus_phone'),
                    'billSplitPayment'=>0,
                    'billSplitPaymentArgs'=>'',
                    'billPaymentChannel'=>'0',
                    'billDisplayMerchant'=>1,
                    'billPaymentCharge'=>1,
                    'billPaymentChannel' => 2
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
                    'bill_no' => $obj[0]->BillCode,
                    'bill_description' =>  $this->request->getVar('bill_detail'),
                    'bill_amount' =>  $this->request->getVar('amount'),
                    'payer_organization' =>  $this->request->getVar('cus_orga'),
                    'payer_phone' =>  $this->request->getVar('cus_phone'),
                    'payer_email' =>  $this->request->getVar('cus_email'),
                    'payment_status' => 'pending',
                    'salesman_id' =>  1,
                    'payer_name' =>$this->request->getVar('cus_name')
                ];
                
                $inventory->masuk($data);
                
                return redirect('/');

            }

       
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
