<?php

namespace NewsApp\Controllers\Student;


class IndexController extends ControllerBase
{

	public function initialize() 
	{

		parent::initialize();
	}
	public function beforeExecuteRoute()
	{
		if(!$this->session->has('authStud')){
			$this->response->redirect('index');
		}
	}
	public function indexAction()
	{
		

	}
}
