<?php
namespace NewsApp\Controllers;

use Phalcon\Mvc\Controller;

use NewsApp\Forms\LoginForm;

use NewsApp\Models\User;

class LoginController extends Controller
{




		// $this->session->set('id', $user->id);
		// $name = $this->session->get('id', $user->id);
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
						// 'profile'=> $tblprofile->profile_id
					];

							//changed added condition
					if ($user->access == 'admin'){
						$this->session->set('authAdmin', $auth);
						$this->session->set('id', $user->id);

						
						$query = $this->modelsManager->createQuery('SELECT profile_id FROM NewsApp\Models\Tblprofile WHERE user_id = :user_id:');
						$profileId = $query->execute( [
							"user_id" => $user_id,
						]);


						// SELECT orders.*, orders_products.* FROM orders
						// JOIN orders_products on orders_products.user_id = orders.user_id
						// WHERE `orders.user_id` = :user_id;


						$this->session->set('profileID',$profileId);  
						

					}else{
						$this->session->set('authUser', $auth);
						$this->session->set('id', $user->id);


					}

							// $this->response->redirect('dashboard');
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

