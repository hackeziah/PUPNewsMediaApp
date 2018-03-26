<?php
namespace NewsApp\Controllers\Student;


use Phalcon\Mvc\Controller;

class CalendarController extends Controller {

	public function beforeExecuteRoute()
	{
		if(!$this->session->has('authStud')){
			$this->response->redirect('index');
		}
	}
	
	public function indexAction(){


	}


}
