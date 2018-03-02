<?php
namespace NewsApp\Controller\Admin;

class LogoutController extends ControllerMain
{
	public function indexAction()
	{
		$this->session->destroy();
		$this->response->redirect('login');	
	}
}


