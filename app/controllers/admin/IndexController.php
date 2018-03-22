<?php

namespace NewsApp\Controllers\Admin;

class IndexController extends ControllerBase
{
	public function initialize() 
	{

		parent::initialize();
	}
	
	public function beforeExecuteRoute()
	{
		if(!$this->session->has('authAdmin')){
			$this->response->redirect('index');
		}
	}

	public function indexAction()
	{
		
	}
}
