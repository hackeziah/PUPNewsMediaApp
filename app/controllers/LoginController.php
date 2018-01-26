<?php
namespace NewsApp\Controllers;

use Phalcon\Mvc\Controller;

use NewsApp\Forms\LoginForm;

use NewsApp\Models\User;

class LoginController extends Controller
{

	public function indexAction()
	{
		$this->response->redirect('index');

	}
    
	public function authenticateAction()
	{
		

		if(!$this->request->isPost()){
			$this->response->redirect('index');
		}
		$loginForm = new LoginForm();

		// $this->view->loginForm = $loginForm;

		if (!$loginForm->isValid($_POST)) {
						foreach($loginForm->getMessages() as $msg) {
							$this->flash->error($msg);
						}

						//flash to specified action
			            return $this->dispatcher->forward([
			                "controller" => "index",
			                "action" => "index"
			            ]);
			}
		
	       if($this->request->isPost())
	            {
				$username = $this->request->getPost('username');
				$password = $this->request->getPost('password');

				$user = User::findFirstByUsername($username);
				if ($user){

						if ($this->security->checkHash($password,$user->password)){

							$auth =[
									'id' => $user->id,
									'access' => $user->access,
									'username' => $user->username
							];

							$this->session->set('auth', $auth);

							$this->response->redirect('dashboard');
						}
				}
			
				$this->flash->error('Invalid Authentication');
				$this->dispatcher->forward([
						'controller' => 'index',
						'action' => 'index'
					]);
				
					
	 
			}

	}
	
	public function registration(){

	}
	

}

