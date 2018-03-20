<?php

namespace NewsApp\Controllers\User;



class IndexController extends ControllerBase
{

	public function initialize() 
	{

		parent::initialize();
	}
	public function beforeExecuteRoute()
	{
		if(!$this->session->has('authUser')){
			$this->response->redirect('index');
		}
	}
	public function indexAction()
	{
		

	}
}
