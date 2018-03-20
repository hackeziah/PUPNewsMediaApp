<?php

namespace NewsApp\Controllers\Admin;

class ManageUsersController extends ControllerBase
{
	public function beforeExecuteRoute()
	{
		if(!$this->session->has('authAdmin')){
			$this->response->redirect('index');
		}
	}

	public function indexAction()
	{
		// echo 'Student Page By Admin';
		// exit;
	}
	
}

