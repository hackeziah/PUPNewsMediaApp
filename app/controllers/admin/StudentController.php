<?php

namespace NewsApp\Controllers\Admin;

class StudentController extends ControllerBase
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
