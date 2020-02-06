<?php namespace App\Controllers;
use App\Models\Product_model;

class Product extends BaseController
{
	public function index()
	{        
        $data['active'] = [
			'Product' => 'active'
		];

		$user = new Product_model();

		$data['enc'] = md5('syazwaniwan');

		$data['title'] = 'EasyWork';
		$data['description'] = 'EarsyWork - Manage your salesman';
		$data['content'] = $user->get();
		$data['salesman'] = count($user->get());
		echo view('templetes/header',$data);
		echo view('pages/product_view',$data);
		echo view('templetes/footer',$data);
	}



    public function add()
    {
        $data['active'] = [
			'Bill' => 'active'
		];

		$user = new Product_model();

		$data['enc'] = md5('syazwaniwan');

		$data['title'] = 'EasyWork';
		$data['description'] = 'EarsyWork - Manage your salesman';
		$data['content'] = $user->get();
		$data['salesman'] = count($user->get());
		echo view('templetes/header',$data);
		echo view('pages/product_add',$data);
		echo view('templetes/footer',$data);
    }


    public function submit()
    {
        $inventory = new Product_model($db);

		$data = [
            'product_name' =>  $this->request->getVar('pro_name'),
            'created_by_id' =>  '1',
            'product_amount' =>  $this->request->getVar('amount'),
			'product_detail' =>$this->request->getVar('detail')
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

		$user = new Employee_model();

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
