<?php

namespace NewsApp\Controllers\Admin;

use Phalcon\Mvc\Controller;
use NewsApp\Models\Tblprofile;

class ControllerBase extends Controller
{
    public function initialize()
    {
    	
    	$this->tag->setTitle('Phalcon Advance Admin');
		$this->view->setViewsDir($this->view->getViewsDir() . 'admin/');
		$id = $this->session->get('authAdmin');
		$user_id = $id['id'];
		$profile= Tblprofile::findFirstByUser_id($user_id);
		$this->view->setVar('prof',$profile);
    }
}
