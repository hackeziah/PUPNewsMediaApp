<?php
namespace NewsApp\Controllers\User;

use Phalcon\Paginator\Adapter\Model as Paginator;
use NewsApp\Models\Tblannouncements;
use NewsApp\Models\Tblevents;


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


	public function eventsAction()
	{
		$events = Tblevents::find();
		$currentPage = $this->request->getQuery('page', 'int') ?? 1;
		$paginator = new Paginator([
			'data' => $events,
			'limit' => 5,
			'page' => $currentPage
		]);

		$this->view->events = $paginator->getPaginate();	
	}

}
