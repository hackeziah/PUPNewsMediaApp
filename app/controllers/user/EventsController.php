<?php
namespace NewsApp\Controllers\User;

class EventsController extends ControllerBase {

	public function beforeExecuteRoute()
	{
		if(!$this->session->has('authUser')){
			$this->response->redirect('index');
		}
	}
	
	public function indexAction(){


	}


}
