<?php

namespace NewsApp\Controllers\Admin;

use Phalcon\Paginator\Adapter\Model as Paginator;
use NewsApp\Models\Tblannouncements;
use NewsApp\Models\User;
use NewsApp\Models\Tblprofile;
use NewsApp\Forms\ProfileForm;
class ManageAnnouncementsController extends ControllerBase
{
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


		// $user_id = $this->session->get('id'); 
		// // echo var_dump($user_id);
		// $query = $this->modelsManager->createQuery('SELECT profile_id FROM NewsApp\Models\Tblprofile WHERE user_id = :user_id:');
		// $pro  = $query->execute( [
		// 	"user_id" => $user_id,
		// ]);
		// echo var_dump($pro);
		// $user_id = $this->session->get('id'); 
		// // echo var_dump($user_id);
		// $query = $this->modelsManager->createQuery('SELECT profile_id FROM NewsApp\Models\Tblprofile WHERE user_id = :user_id:');
		// $profileId = $query->execute( [
		// 	"user_id" => $user_id,
		// ]);


		// $profile= Tblprofile::findFirst($profileId);

		//  echo var_dump($profile);

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
		// echo var_dump($user_id);
		// $query = $this->modelsManager->createQuery('SELECT profile_id FROM NewsApp\Models\Tblprofile WHERE user_id = :user_id:');
		// $profileId = $query->execute( [
		// 	"user_id" => $user_id,
		// ]);


		// $this->session->set('profileID',$profileId); 


		// $profileID = $this->session->get('profileID'); 
		
		


		// // display student detail here
		// // $id = $this->filter->sanitize($id, 'int');
		
		// $profile = Tblprofile::findFirst($profileID);
		// $ProfileForm = new StudentForm($student);
		// $this->view->ProfileForm = $ProfileForm;
		// $this->session->set(, $user->id);



	 //   	$profileId = $this->request->getPost('profileId', 'int');


		// // $ins = Tblannouncements::findFirst($announce_id);

	 //     $profiles = Tblprofile::findFirst($profileId);

		// $this->view->profiles=$profiles;


	}

	public function createannounceAction()
	{

		$profileID = $this->session->get('profileID'); 
		
		// $stmt = Tblprofile::findFirst($profileID);
 		
 		
		// echo json_encode($stmt);


		// $prof= new ProfileForm($stmt);

		// $this->view->ProfileForm = $ProfileForm;
		
		//  $profile = Tblprofile::findFirst($profileId);
		// $this->view->profileId=$profileId;


		if (!$this->request->isPost() && !$this->request->isAjax()) {
			return $this->response->redirect('admin/manageannouncements');
		}

		


		

		// $profile_id = $this->request->getPost('profile_id');

		$title = $this->request->getPost('title');
		$content = $this->request->getPost('content');
		$timestamp = $this->request->getPost('timestamp');


		$ins = new Tblannouncements();


		$ins->$profileID 	=  $$profileID ;
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
				// $announce_id = $this->filter->sanitize('announce_id', 'int');
		$announce_id = $this->request->getPost('announce_id', 'int');


		$ins = Tblannouncements::findFirst($announce_id);

		if (!$ins) {
						// pag walang ganun ma record
			$this->response->redirect('admin/manageannouncements');
		}

	        	// $category_name = $this->request->getPost('category_name');




		$ins->profile_id	= $this->request->getPost('profile_id');
		$ins->title	= $this->request->getPost('title');
		$ins->content	= $this->request->getPost('content');
		$ins->timestamp	= $this->request->getPost('timestamp');
		
		



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
