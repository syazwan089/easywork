<?php namespace App\Controllers;
use App\Models\User_Model;
use App\Models\Gateway_Model;
use CodeIgniter\I18n\Time;
class Home extends BaseController
{
	public function index()
	{
		$data['active'] = [
			'dashboard' => 'active'
		];

		$user = new User_Model();

		$data['enc'] = md5('syazwaniwan');

		$currentTimeinSeconds = time();  
		$data['time'] = 'EMP' .strval($currentTimeinSeconds - 2001);

		$data['title'] = 'EasyWork';
		$data['description'] = 'EarsyWork - Manage your salesman';
		$data['content'] = $user->getuser();
		$data['salesman'] = count($user->getuser());
		echo view('templetes/header',$data);
		echo view('pages/home',$data);
		echo view('templetes/footer',$data);
	}

	//--------------------------------------------------------------------


	public function gateway()
	{
		$toyib = new Gateway_Model();
	
		$data['active'] = [
			'pay' => 'active'
		];
		
		$data['title'] = 'EasyWork';
		$data['description'] = 'EarsyWork - Manage your salesman';
		$data['key'] = $toyib->get();
	
		echo view('templetes/header',$data);
		echo view('pages/gateway_setting',$data);
		echo view('templetes/footer',$data);

	}


	public function submit()
	{
		$toyib = new Gateway_Model($db);

		$data = [
			'category_id' =>  $this->request->getVar('cc-category'),
			'secret_key' =>$this->request->getVar('cc-secretkey')
		];
		
		$toyib->semula($data);
		
		return redirect('/');
		
	}

}
