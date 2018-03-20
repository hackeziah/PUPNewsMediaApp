<?php

namespace NewsApp\Controllers\User;

class ViewController extends ControllerBase
{


	public function beforeExecuteRoute()
	{
		if(!$this->session->has('authUser')){
			$this->response->redirect('index');
		}
	}
	
	public function profileAction()
	{
		
	}
	
}
