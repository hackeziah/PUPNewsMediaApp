<?php
namespace NewsApp\Controller\Admin;

use Phalcon\Mvc\Controller;

class CalendarController extends ControllerMain {
	

	public function beforeExecuteRoute()
	{
		if(!$this->session->has('authAdmin')){
			$this->response->redirect('index');
		}
	}

	public function indexAction(){


	}


}
