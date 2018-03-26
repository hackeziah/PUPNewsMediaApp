<?php

namespace NewsApp\Controllers;
use NewsApp\Forms\LoginForm;
use NewsApp\Forms\RegistrationForm;


use Phalcon\Mvc\Controller;
use NewsApp\Models\User;
use NewsApp\Models\Tblprofile;

date_default_timezone_set('Asia/Manila');
class IndexController extends Controller
{

	public function initialize()
	{
		$this->tag->setTitle('Login');

		//added condition
		if ($this->session->has('authAdmin')) {
			$this->response->redirect('admin/home');
		}
		if ($this->session->has('authUser')) {
			$this->response->redirect('user/home');
		}
		
		if($this->session->has('authStud')){
			$this->response->redirect('student/home');
		}
	}

	public function indexAction()
	{

		$loginForm = new LoginForm();
		$this->view->loginForm = $loginForm;

	}

	public function registrationAction()
	{

		$registerForm= new RegistrationForm();
		$this->view->registerForm = $registerForm;


	}
	
	public function registerAction()
	{
		if($this->request->getPost('pass') == $this->request->getPost('confirm')){
			$usr= new User();
			$usr->username = $this->request->getPost('studentno');
			$usr->password = $this->security->hash($this->request->getPost('pass'));
			$usr->access = 'student';
			$username = $this->request->getPost('studentno');
			if($usr->save()){
				$user = User::findFirstByUsername($username);
				$profile = new Tblprofile();
				$profile->firstname = $this->request->getPost('firstname');
				$profile->middlename = $this->request->getPost('middlename');
				$profile->lastname = $this->request->getPost('lastname');
				$profile->email = $this->request->getPost('email');
				$profile->user_id=$user->id;
				$profile->birthdate = '0000-00-00';
				$profile->goals = 'SET';
				$profile->about = 'SET';
				$profile->profilepic = 'none.png';

				if ($profile->save() == false) {
					foreach ($profile->getMessages() as $message) {
						echo $message;
					}
				}else{
					$this->response->redirect('index');
				}
			}
		}
	}
	public function forgotpassAction()
	{

	}


}
