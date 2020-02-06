<?php namespace App\Controllers;
use App\Models\User_Model;
use App\Models\Employee_model;

class Employee extends BaseController
{
	public function index()
	{
		helper('array');

		$user = new Employee_model();

		$data['enc'] = md5('syazwaniwan');

		$data['title'] = 'EasyWork';
		$data['description'] = 'EarsyWork - Manage your salesman';
		$data['content'] = $user->get();
		$data['salesman'] = count($user->get());
		echo view('templetes/header',$data);
		echo view('pages/employee_view',$data);
		echo view('templetes/footer',$data);
	}

	//--------------------------------------------------------------------


	



}
