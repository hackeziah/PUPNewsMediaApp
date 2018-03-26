<?php
namespace NewsApp\Controllers\Student;
class EventsController extends ControllerBase {

	public function beforeExecuteRoute()
	{
		if(!$this->session->has('authStud')){
			$this->response->redirect('index');
		}
	}
	
	public function indexAction(){


	}


}
