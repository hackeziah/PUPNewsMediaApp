<?php

namespace NewsApp\Controllers\Admin;

use Phalcon\Paginator\Adapter\Model as Paginator;
use NewsApp\Models\Tblannouncements;
use NewsApp\Models\User;
use NewsApp\Models\Tblprofile;
use NewsApp\Models\Tblcommentmag;
use NewsApp\Models\Tblcommentnews;
use NewsApp\Models\Tblevents;
use NewsApp\Models\Tblfollow;
use NewsApp\Models\Tblmagazine;
use NewsApp\Models\Tblmagazinenews;
use NewsApp\Models\Tblnews;


use NewsApp\Forms\ProfileForm;

class ManageUsersController extends ControllerBase
{

	public function beforeExecuteRoute()
	{
		if(!$this->session->has('authAdmin')){
			$this->response->redirect('index');
		}
	}

	public function indexAction()
	{


		$users = User::find();
		$currentPage = $this->request->getQuery('page', 'int') ?? 1;
		$paginator = new Paginator([
			'data' => $users,
			'limit' => 3,
			'page' => $currentPage
		]);

		

		$this->view->users = $paginator->getPaginate();	



		// $id = $this->session->get('authAdmin');
		// $user_id = $id['id'];

		// $query = $this->modelsManager->createQuery('SELECT profile_id FROM NewsApp\Models\Tblprofile WHERE user_id=:user_id:');
		// $stmt = $query->execute([
		// 	'user_id'=>$user_id,
		// ]);

		// // var_dump($query);
		// $profile= Tblprofile::findFirst($user_id);


		// $this->view->profile = $profile;

		// $profileForm = new ProfileForm($profile);
		// $this->view->profileForm = $profileForm;


		// $id = $this->session->get('authAdmin');
		// $user_id = $id['id'];

		// $query = $this->modelsManager->createQuery('SELECT profile_id FROM NewsApp\Models\Tblprofile WHERE user_id=:user_id:');
		// $stmt = $query->execute([
		// 	'user_id'=>$user_id,
		// ]);

		// // var_dump($query);
		// $profile= Tblprofile::findFirst($user_id);


		// $this->view->profile = $profile;

		// $profileForm = new ProfileForm($profile);
		// $this->view->profileForm = $profileForm;


	}


	public function theusersAction()
	{
		$users = User::find();
		$currentPage = $this->request->getQuery('page', 'int') ?? 1;
		$paginator = new Paginator([
			'data' => $users,
			'limit' => 3,
			'page' => $currentPage
		]);

		$this->view->users = $paginator->getPaginate();	
		
		$user_id = $this->session->get('id'); 
		

	}

	// public function createusersAction()
	// {

	// 	if (!$this->request->isPost() && !$this->request->isAjax()) {
	// 		return $this->response->redirect('admin/manageusers');
	// 	}

	// 	$id = $this->session->get('authAdmin');
	// 	$user_id = $id['id'];

	// 	$profile= Tblprofile::findFirstByUser_id($user_id);


	// 	$this->view->profile = $profile;


	// 	$title = $this->request->getPost('title');
	// 	$content = $this->request->getPost('content');
	// 	$profile = $this->request->getPost('profile');



	// 	$ins = new User();

	// 	// $student->first = 80;
	// 	$ins->profile_id 	= $profile;
	// 	$ins->title	=  $title;
	// 	$ins->content	=  $content;




	// 	if ($ins->save()) {
	// 			// $this->session->set('message', 'New record has been added!');
	// 		echo json_encode(["status" => 'ok','message' => 'Okay Here']);

	// 	}

	// 	else{
	// 		echo json_encode(["status" => 'error','message' => 'Error Here']);
	// 	}

	// 	return false;

	// }

	
	// public function detailAnnounceAction($id)
	// {
	// 	if (!$this->request->isPost() && !$this->request->isAjax()) {
	// 		return $this->response->redirect('admin/manageusers');
	// 	}

	// 	$id = $this->filter->sanitize($id, 'int');

	// 	$users = User::findFirst($id);
	// 	echo json_encode($users);

	// 	if (!$users) {
	// 		// pag walang ganun
	// 		$this->response->redirect('admin/manageusers');
	// 	}

	// 	return false;


	// }

	// public function editannounceAction()
	// {
	// 	// check if post request if not redire
	// 	if (!$this->request->isPost() && !$this->request->isAjax()) {
	// 		return $this->response->redirect('admin/manageusers');
	// 	}
	// 	$id = $this->request->getPost('id');


	// 	$ins = User::findFirst($id);

	// 	if (!$ins) {
	// 		// pag walang ganun ma record
	// 		$this->response->redirect('admin/manageusers');
	// 	}


	// 	$profile = $this->request->getPost('profile');
	// 	$title = $this->request->getPost('title');
	// 	$content = $this->request->getPost('content');


	// 	$ins->profile_id 	= $profile;
	// 	$ins->title	=  $title;
	// 	$ins->content	=  $content;

	// 	if ($ins->save()) {

	// 		echo json_encode(["status" => 'ok','message' => 'Okay Here']);

	// 	}

	// 	else {
	// 		echo json_encode(["status" => 'error','message' => 'Error Here']);
	// 	}

	// 	return false;
	// }

	public function deleteuserAction($id)
	{

		if (!$this->request->isPost() && !$this->request->isAjax()) {
			return $this->response->redirect('admin/manageusers');
		}

		$user_id = $this->filter->sanitize($id, 'int');


		$query = $this->modelsManager->createQuery('DELETE FROM User, Tblprofile WHERE User.id = Tblprofile.user_id AND User.id=:user_id:');
		$del = $query->execute([
			'user_id'=>$user_id,
		]);
		// DELETE T1, T2
		// FROM T1
		// INNER JOIN T2 ON T1.key = T2.key
		// WHERE condition;

		if (!$del) {
					// pag walang ganun
			$this->response->redirect('admin/manageusers');
		}

		if ($del->delete()) {
			echo json_encode(["status" => 'ok','message' => 'Okay Here']);

		}

		else {
			echo json_encode(["status" => 'error','message' => 'Error Here']);

		}

		return false;

		// $users = User::findFirst($id);
		// $profUsers = Tblprofile::findFirstByUser_id($id);
		// $newsUsers = Tblnews::findFirstByUser_id($id);
		// $magUsers = Tblmagazine::findFirstByUser_id($id);
		// $magnewUsers = Tblmagazinenews::findFirstByUser_id($id);
		// $followUsers = Tblfollow::findFirstByUser_id($id);
		// $commagUsers = Tblcommentmag::findFirstByUser_id($id);
		// $comnewsUsers = Tblcommentnews::findFirstByUser_id($id);
		// $phql = "DELETE User.*,Tblprofile.*,Tblnews.*, Tblmagazine.*,Tblmagazinenews.*,Tblfollow.*, Tblcommentmag.*,Tblcommentnews.* from User,Tblprofile,Tblnews, Tblmagazine,Tblmagazinenews,Tblfollow, Tblcommentmag,Tblcommentnews WHERE User.user_id=Tblprofile.user_id AND User.user_id='1' ";

		// $phql = "DELETE User.*,Tblprofile.* from User,Tblprofile WHERE User.user_id=Tblprofile.user_id AND User.user_id=:user_id:";


		// if (!$users and !$profUsers and !$newsUsers and !$magUsers and !$magnewUsers and !$followUsers and !$commagUsers and !$comnewsUsers) {
		// 			// pag walang ganun
		// 	$this->response->redirect('admin/manageusers');
		// }

		// $del = $manager->executeQuery($phql);

	}

}



