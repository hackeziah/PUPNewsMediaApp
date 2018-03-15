<?php

namespace NewsApp\Controllers\Admin;

use Phalcon\Paginator\Adapter\Model as Paginator;
use NewsApp\Models\Tblevents;

class ManageEventsController extends ControllerBase
{
	public function indexAction()
	{
		$events = Tblevents::find();
		$currentPage = $this->request->getQuery('page', 'int') ?? 1;
		$paginator = new Paginator([
			'data' => $events,
			'limit' => 3,
			'page' => $currentPage
		]);

		$this->view->events = $paginator->getPaginate();	

		// var_dump($events);
	}


	public function eventsAction()
	{
		$events = Tblevents::find();
		$currentPage = $this->request->getQuery('page', 'int') ?? 1;
		$paginator = new Paginator([
			'data' => $events,
			'limit' => 3,
			'page' => $currentPage
		]);

		$this->view->events = $paginator->getPaginate();	
		
		$user_id = $this->session->get('id'); 
		// echo var_dump($user_id);
		// $query = $this->modelsManager->createQuery('SELECT profile_id FROM NewsApp\Models\Tblprofile WHERE user_id = :user_id:');
		// $profileId = $query->execute( [
		// 	"user_id" => $user_id,
		// ]);


		// $this->session->set('profileID',$profileId); 


		// $profileID = $this->session->get('profileID'); 
		// echo var_dump($profileID);
		// $this->session->set(, $user->id);



	 //   	$profileId = $this->request->getPost('profileId', 'int');


		// // $ins = Tblannouncements::findFirst($announce_id);

	 //     $profiles = Tblprofile::findFirst($profileId);

		// $this->view->profiles=$profiles;


	}

	public function createeventsAction()
	{
	
		if (!$this->request->isPost() && !$this->request->isAjax()) {
			return $this->response->redirect('admin/manageevents');
		}

		$profile_id = $this->request->getPost('profile_id');
		$title = $this->request->getPost('title');
		$content = $this->request->getPost('content');
		$timestamp = $this->request->getPost('timestamp');



		$ins = new Tblevents();
		$ins->profile_id = $profile_id;
		$ins->title	=  $title;
		$ins->content	=  $content;
		$ins->timestamp	=  $timestamp;



		if ($ins->save()) {

				// $this->session->set('message', 'New record has been added!');
			echo json_encode(["status" => 'ok','message' => 'Okay Here']);

		}

		else{
			echo json_encode(["status" => 'error','message' => 'Error Here']);
		}

		return false;

	}

	
	public function detaileventsAction($event_id)
	{
		if (!$this->request->isPost() && !$this->request->isAjax()) {
			return $this->response->redirect('admin/manageevents');
		}

		$event_id = $this->filter->sanitize($event_id, 'int');
	
		$events = Tblevents::findFirst($event_id);
		echo json_encode($events);

		if (!$events) {
			// pag walang ganun
			$this->response->redirect('admin/manageevents');
		}

		return false;


	}

	public function editeventsAction()
	{
		// check if post request if not redire
		if (!$this->request->isPost() && !$this->request->isAjax()) {
			return $this->response->redirect('admin/manageevents');
		}
				// $event_id = $this->filter->sanitize('event_id', 'int');
		$event_id = $this->request->getPost('event_id', 'int');

	
		$ins = Tblevents::findFirst($event_id);

		if (!$ins) {
						// pag walang ganun ma record
			$this->response->redirect('admin/manageevents');
		}

		$profile_id = $this->request->getPost('profile_id');
		$title = $this->request->getPost('title');
		$content = $this->request->getPost('content');
		$timestamp = $this->request->getPost('timestamp');



		// $ins = new Tblevents();
		
		// $ins->timestamp	=  $timestamp;


		$ins->profile_id	= $this->request->getPost('profile_id');
		$ins->title	= $this->request->getPost('title');
		$ins->content	= $this->request->getPost('content');
		$ins->timestamp	= $this->request->getPost('timestamp');




		if ($ins->update()) {


			echo json_encode(["status" => 'ok','message' => 'Okay Here']);

		}

		else {
			echo json_encode(["status" => 'error','message' => 'Error Here']);
		}

		return false;
	}


	public function deleteventsAction($event_id)
	{
	
		if (!$this->request->isPost() && !$this->request->isAjax()) {
			return $this->response->redirect('admin/manageevents');
		}

		$event_id = $this->filter->sanitize($event_id, 'int');

		$events = Tblevents::findFirst($event_id);
				// echo json_encode($cat);

		if (!$events) {
					// pag walang ganun
			$this->response->redirect('admin/manageevents');
		}
		if ($events->delete()) {
			echo json_encode(["status" => 'ok','message' => 'Okay Here']);

		} else {
			echo json_encode(["status" => 'error','message' => 'Error Here']);

		}
		return false;

	}

}
