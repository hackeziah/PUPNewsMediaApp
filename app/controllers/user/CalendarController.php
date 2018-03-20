<?php
namespace NewsApp\Controllers\User;


use Phalcon\Mvc\Controller;

class CalendarController extends Controller {

	public function beforeExecuteRoute()
	{
		if(!$this->session->has('authUser')){
			$this->response->redirect('index');
		}
	}
	
	public function indexAction(){


	}


}
