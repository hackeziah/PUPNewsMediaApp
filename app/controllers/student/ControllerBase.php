<?php

namespace NewsApp\Controllers\Student;

use Phalcon\Mvc\Controller;
use NewsApp\Models\Tblprofile;

class ControllerBase extends Controller
{
	public function initialize()
	{
		$this->tag->setTitle('PUP');
		$this->view->setViewsDir($this->view->getViewsDir() . 'student/');
		$id = $this->session->get('authStud');
		$user_id = $id['id'];
		$profile= Tblprofile::findFirstByUser_id($user_id);
		$this->view->setVar('prof',$profile);
	}
}
