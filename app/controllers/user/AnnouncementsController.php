<?php
namespace NewsApp\Controllers\User;

use Phalcon\Paginator\Adapter\Model as Paginator;
use NewsApp\Models\Tblannouncements;

class AnnouncementsController extends ControllerBase {


	public function indexAction(){


	}




	public function announcementsAction()
	{
			$annouces = Tblannouncements::find();
		$currentPage = $this->request->getQuery('page', 'int') ?? 1;
		$paginator = new Paginator([
			'data' => $annouces,
			'limit' => 5,
			'page' => $currentPage
		]);

		$this->view->annouces = $paginator->getPaginate();	
	}

}
