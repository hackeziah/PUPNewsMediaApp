<?php

namespace NewsApp\Controllers\Admin;

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
    public function initialize()
    {
    	
    	$this->tag->setTitle('Phalcon Advance Admin');
		$this->view->setViewsDir($this->view->getViewsDir() . 'admin/');
    }
}
