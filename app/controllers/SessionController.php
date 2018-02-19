<?php

namespace NewsApp\Controllers;

class SessionController extends ControllerBase
{
	public function indexAction()
	{
		
	}

	public function loginAction()
	{

	}
	
	public function logoutAction()
	{
		$this->session->destroy();
		$this->response->redirect('index');	
	}

	public function resetAction()
	{

	}
}
