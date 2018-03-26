<?php

namespace NewsApp\Controllers\Student;

class ViewController extends ControllerBase
{


	public function beforeExecuteRoute()
	{
		if(!$this->session->has('authStud')){
			$this->response->redirect('index');
		}
	}
	
	public function profileAction()
	{
		
	}
	
}
