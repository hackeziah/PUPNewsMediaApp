<?php

namespace NewsApp\Controllers\Admin;

use Phalcon\Paginator\Adapter\Model as Paginator;
use NewsApp\Models\Tblannouncements;
use NewsApp\Models\User;
use NewsApp\Models\Tblprofile;
use NewsApp\Forms\ProfileForm;

class ManageAnnouncementsController extends ControllerBase
{

	public function beforeExecuteRoute()
	{
		if(!$this->session->has('authAdmin')){
			$this->response->redirect('index');
		}
	}

	public function indexAction()
	{


		$annouce = Tblannouncements::find();
		$currentPage = $this->request->getQuery('page', 'int') ?? 1;
		$paginator = new Paginator([
			'data' => $annouce,
			'limit' => 3,
			'page' => $currentPage
		]);

		$this->view->annouce = $paginator->getPaginate();	

		$id = $this->session->get('authAdmin');
		$user_id = $id['id'];
		$query = $this->modelsManager->createQuery('SELECT profile_id FROM NewsApp\Models\Tblprofile WHERE user_id=:user_id:');
		$stmt = $query->execute([
			'user_id'=>$user_id,
		]);
		$profile= Tblprofile::findFirst($stmt);
		$this->view->id = $profile->profile_id;
		$profileForm = new ProfileForm($profile);
		$this->view->profileForm = $profileForm;

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
		
		$user_id = $this->session->get('id'); 
		

	}

	public function createannounceAction()
	{

		if (!$this->request->isPost() && !$this->request->isAjax()) {
			return $this->response->redirect('admin/manageannouncements');
		}


		$profile_id = $this->request->getPost('profile_id');
		$title = $this->request->getPost('title');
		$content = $this->request->getPost('content');


		$ins = new Tblannouncements();


		$ins->profile_id 	=  $profile_id;
		$ins->title	=  $title;
		$ins->content	=  $content;
		



		if ($ins->save()) {

				// $this->session->set('message', 'New record has been added!');
			echo json_encode(["status" => 'ok','message' => 'Okay Here']);

		}

		else{
			echo json_encode(["status" => 'error','message' => 'Error Here']);
		}

		return false;

	}

	
	public function detailAnnounceAction($announce_id)
	{
		if (!$this->request->isPost() && !$this->request->isAjax()) {
			return $this->response->redirect('admin/manageannouncements');
		}

		$announce_id = $this->filter->sanitize($announce_id, 'int');

		$annouce = Tblannouncements::findFirst($announce_id);
		echo json_encode($annouce);

		if (!$annouce) {
			// pag walang ganun
			$this->response->redirect('admin/manageannouncements');
		}

		return false;


	}

	public function editannounceAction()
	{
		// check if post request if not redire
		if (!$this->request->isPost() && !$this->request->isAjax()) {
			return $this->response->redirect('admin/manageannouncements');
		}
		$announce_id = $this->request->getPost('announce_id');
		// $announce_id = $this->request->getPost('announce_id', 'int');

		$ins = Tblannouncements::findFirst($announce_id);
		if (!$ins) {
						// pag walang ganun ma record
			$this->response->redirect('admin/manageannouncements');
		}
		$profile_id = $this->request->getPost('profile_id');
		$title = $this->request->getPost('title');
		$content = $this->request->getPost('content');




		$ins->profile_id 	=  $profile_id;
		$ins->title	=  $title;
		$ins->content	=  $content;

		if ($ins->save()) {

			echo json_encode(["status" => 'ok','message' => 'Okay Here']);

		}

		else {
			echo json_encode(["status" => 'error','message' => 'Error Here']);
		}

		return false;
	}

	public function deleteAnnounceAction($announce_id)
	{

		if (!$this->request->isPost() && !$this->request->isAjax()) {
			return $this->response->redirect('admin/manageannouncements');
		}

		$announce_id = $this->filter->sanitize($announce_id, 'int');

		$annouce = Tblannouncements::findFirst($announce_id);
				// echo json_encode($cat);

		if (!$annouce) {
					// pag walang ganun
			$this->response->redirect('admin/manageannouncements');
		}
		if ($annouce->delete()) {
			echo json_encode(["status" => 'ok','message' => 'Okay Here']);

		} else {
			echo json_encode(["status" => 'error','message' => 'Error Here']);

		}
		return false;

	}

}
