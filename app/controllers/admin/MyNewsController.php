<?php

namespace NewsApp\Controllers\Admin;

class MyNewsController extends ControllerBase {
	

	public function beforeExecuteRoute()
	{
		if(!$this->session->has('authAdmin')){
			$this->response->redirect('index');
		}
	}


	public function indexAction(){


	}


}
