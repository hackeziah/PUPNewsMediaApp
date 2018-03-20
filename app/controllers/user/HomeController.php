<?php

namespace NewsApp\Controllers\User;

class HomeController extends ControllerBase
{	

	public function beforeExecuteRoute()
	{
		if(!$this->session->has('authUser')){
			$this->response->redirect('index');
		}
	}
	public function indexAction()
	{
		//echo 'Student Page By Admin';
		// exit;
	}
	
}
