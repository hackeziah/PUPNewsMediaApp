<?php

namespace NewsApp\Controllers\User;

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
    public function initialize()
    {
    	$this->tag->setTitle('Phalcon Advance user');
    	$this->view->setViewsDir($this->view->getViewsDir() . 'user/');
    }
}
