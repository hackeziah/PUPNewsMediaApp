<?php
namespace NewsApp\Controllers\Student;

use Phalcon\Paginator\Adapter\Model as Paginator;
use NewsApp\Models\Tblannouncements;
use NewsApp\Models\Tblevents;


class AnnouncementsController extends ControllerBase {

	public function beforeExecuteRoute()
	{
		if(!$this->session->has('authStud')){
			$this->response->redirect('index');
		}
	}
	
	public function indexAction(){


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
	}


	
	public function detailannounceAction($announce_id)
	{
		if (!$this->request->isPost() && !$this->request->isAjax()) {
			return $this->response->redirect('student/announcements');
		}

		$announce_id = $this->filter->sanitize($announce_id, 'int');
		
		$annouce = Tblannouncements::findFirst($announce_id);
		echo json_encode($annouce);

		if (!$annouce) {
			// pag walang ganun
			$this->response->redirect('student/announcements');
		}

		return false;


	}

	
	public function detaileventsAction($event_id)
	{
		if (!$this->request->isPost() && !$this->request->isAjax()) {
			return $this->response->redirect('student/announcements');
		}

		$event_id = $this->filter->sanitize($event_id, 'int');
		
		$events = Tblevents::findFirst($event_id);
		echo json_encode($events);

		if (!$events) {
			// pag walang ganun
			$this->response->redirect('student/announcements');
		}

		return false;


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
