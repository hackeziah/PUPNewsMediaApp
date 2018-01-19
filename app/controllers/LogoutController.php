<?php

namespace NewsApp\Controllers;

class LogoutController extends ControllerMain
{
	public function indexAction()
	{
		$this->session->destroy();
		$this->response->redirect('login');	
	}
}
