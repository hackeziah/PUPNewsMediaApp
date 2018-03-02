<?php

namespace NewsApp\Controllers\User;


class LogoutController extends ControllerMain
{
	public function indexAction()
	{
		$this->session->destroy();
		$this->response->redirect('login');	
	}
}


