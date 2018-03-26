<?php
namespace NewsApp\Controllers\Student;


class LogoutController extends ControllerMain
{
	public function indexAction()
	{
		$this->session->destroy();
		$this->response->redirect('login');	
	}
}


