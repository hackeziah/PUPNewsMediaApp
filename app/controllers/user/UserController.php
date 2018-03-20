<?php
namespace NewsApp\Controllers\User;


use Phalcon\Mvc\Controller;

use Phalcon\Paginator\Adapter\Model as Paginator;
use NewsApp\Models\Tblannouncements;

class UserController extends Controller{

	public function beforeExecuteRoute()
	{
		if(!$this->session->has('authUser')){
			$this->response->redirect('index');
		}
	}
	
	public function indexAction (){

	}

	public function announcementsAction()
	{
		$annouces = Tblannouncements::find();
		$currentPage = $this->request->getQuery('page', 'int') ?? 1;
		$paginator = new Paginator([
			'data' => $annouces,
			'limit' => 3,
			'page' => $currentPage
		]);

		$this->view->annouces = $paginator->getPaginate();	
		var_dump($annouces);
	}



}