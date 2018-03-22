<?php

namespace NewsApp\Controllers\Admin;

use Phalcon\Paginator\Adapter\Model as Paginator;
use NewsApp\Models\Tblannouncements;
use NewsApp\Models\News;
use NewsApp\Models\Tblprofile;
use NewsApp\Models\Tblnews;

use NewsApp\Forms\ProfileForm;

class ManageNewsController extends ControllerBase
{

	public function beforeExecuteRoute()
	{
		if(!$this->session->has('authAdmin')){
			$this->response->redirect('index');
		}
	}

	public function indexAction()
	{


		$news = Tblnews::find();
		$currentPage = $this->request->getQuery('page', 'int') ?? 1;
		$paginator = new Paginator([
			'data' => $news,
			'limit' => 3,
			'page' => $currentPage
		]);

		

		$this->view->news = $paginator->getPaginate();	



		// $id = $this->session->get('authAdmin');
		// $News_id = $id['id'];

		// $query = $this->modelsManager->createQuery('SELECT profile_id FROM NewsApp\Models\Tblprofile WHERE News_id=:News_id:');
		// $stmt = $query->execute([
		// 	'News_id'=>$News_id,
		// ]);

		// // var_dump($query);
		// $profile= Tblprofile::findFirst($News_id);


		// $this->view->profile = $profile;

		// $profileForm = new ProfileForm($profile);
		// $this->view->profileForm = $profileForm;


		// $id = $this->session->get('authAdmin');
		// $News_id = $id['id'];

		// $query = $this->modelsManager->createQuery('SELECT profile_id FROM NewsApp\Models\Tblprofile WHERE News_id=:News_id:');
		// $stmt = $query->execute([
		// 	'News_id'=>$News_id,
		// ]);

		// // var_dump($query);
		// $profile= Tblprofile::findFirst($News_id);


		// $this->view->profile = $profile;

		// $profileForm = new ProfileForm($profile);
		// $this->view->profileForm = $profileForm;


	}


	public function theNewssAction()
	{
		$news = News::find();
		$currentPage = $this->request->getQuery('page', 'int') ?? 1;
		$paginator = new Paginator([
			'data' => $news,
			'limit' => 3,
			'page' => $currentPage
		]);

		$this->view->news = $paginator->getPaginate();	
		
		$News_id = $this->session->get('id'); 
		

	}

	// public function createNewssAction()
	// {

	// 	if (!$this->request->isPost() && !$this->request->isAjax()) {
	// 		return $this->response->redirect('admin/manageNewss');
	// 	}

	// 	$id = $this->session->get('authAdmin');
	// 	$News_id = $id['id'];

	// 	$profile= Tblprofile::findFirstByNews_id($News_id);
		

	// 	$this->view->profile = $profile;
		

	// 	$title = $this->request->getPost('title');
	// 	$content = $this->request->getPost('content');
	// 	$profile = $this->request->getPost('profile');



	// 	$ins = new News();

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
	// 		return $this->response->redirect('admin/manageNewss');
	// 	}

	// 	$id = $this->filter->sanitize($id, 'int');

	// 	$new = News::findFirst($id);
	// 	echo json_encode($news);

	// 	if (!$news) {
	// 		// pag walang ganun
	// 		$this->response->redirect('admin/manageNewss');
	// 	}

	// 	return false;


	// }

	// public function editannounceAction()
	// {
	// 	// check if post request if not redire
	// 	if (!$this->request->isPost() && !$this->request->isAjax()) {
	// 		return $this->response->redirect('admin/manageNewss');
	// 	}
	// 	$id = $this->request->getPost('id');
		

	// 	$ins = News::findFirst($id);

	// 	if (!$ins) {
	// 		// pag walang ganun ma record
	// 		$this->response->redirect('admin/manageNewss');
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

	public function deletenewsAction($id)
	{

		if (!$this->request->isPost() && !$this->request->isAjax()) {
			return $this->response->redirect('admin/managenews');
		}

		$id = $this->filter->sanitize($id, 'int');

		$news = Tblnews::findFirst($id);
			
		if (!$news) {
					// pag walang ganun
			$this->response->redirect('admin/managenews');
		}
		if ($news->delete()) {
			echo json_encode(["status" => 'ok','message' => 'Okay Here']);

		} else {
			echo json_encode(["status" => 'error','message' => 'Error Here']);

		}
		return false;

	}

}
