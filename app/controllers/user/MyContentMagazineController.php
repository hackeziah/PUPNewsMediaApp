<?php

namespace NewsApp\Controllers\User;

use NewsApp\Models\Tblprofile;
use NewsApp\Forms\ProfileForm;
use NewsApp\Models\Tblcategory;
use NewsApp\Models\Tblnews;
use NewsApp\Models\Tblmagazine;
use NewsApp\Models\Tblmagazinenews;

class MyContentMagazineController extends ControllerBase
{
	public function beforeExecuteRoute()
	{
		if(!$this->session->has('authUser')){
			$this->response->redirect('index');
		}
	}

	public function indexAction()
	{
		$id = $this->session->get('authUser');
		$user_id = $id['id'];
		$profile= Tblprofile::findFirstByUser_id($user_id);
		$profile_id = $profile->profile_id;
		$query = $this->modelsManager->createQuery('SELECT * FROM NewsApp\Models\Tblmagazinenews  WHERE profile_id = :profile_id:  ORDER BY timestamp DESC');
		$stmt = $query->execute([
			'profile_id'=>$profile_id,
		]);
		$this->view->mymag = $stmt;
		$category = Tblcategory::find();
		$this->view->category = $category;
		//echo 'Student Page By User';
		// exit;
	}

	
	// public function editAction($id)
	// {
	// 	$magazine = Tblmagazine::findFirstByMagazine_id($id);
	// 	$query = $this->modelsManager->createQuery('SELECT * FROM NewsApp\Models\Tblmagazinenews  WHERE magazine_id = :id:  ORDER BY timestamp DESC');
	// 	$stmt = $query->execute([
	// 		'id'=>$id,
	// 	]);

	// 	$query = $this->modelsManager->createQuery('SELECT * FROM NewsApp\Models\Tblnews  WHERE status = 1  ORDER BY timestamp DESC');
	// 	$news = $query->execute();
	// 	$this->view->news = $news;
	// 	$this->view->magazineContent = $stmt;
	// 	$this->view->magazine = $magazine;
	// }

	public function updateAction()
	{
		if(!$this->request->isPost()){
			$this->response->redirect('user/mycontentmagazine');
		}

		$magupdate = Tblmagazine::findFirstByMagazine_id($this->request->getPost('magazine_id'));

		// if (true == $this->request->hasFiles() && $this->request->isPost()) {
		// 	$upload_dir = __DIR__ . '/../../../public/uploads/News/';

		// 	if (!is_dir($upload_dir)) {
		// 		mkdir($upload_dir, 0755);
		// 	}
		// 	foreach ($this->request->getUploadedFiles() as $file) {
		// 		$file->moveTo($upload_dir . $file->getName());
		// 		$this->flashSession->success($file->getName().' has been successfully uploaded.');
		// 	}
		// }


		$magupdate->title = $this->request->getPost('title');
		$magupdate->content = $this->request->getPost('content');
		$magupdate->category = $this->request->getPost('category');	
		// $magupdate->file = 'none.png';
		// if( strlen($file->getName()) >= 1 ){
		// 	$magupdate->file = $file->getName();
		// }


		if($this->request->getPost('status') == 'private' ){
			$magupdate->status = 0;
		}else{
			$magupdate->status = 1;			
		}
		if($magupdate->save()==false){
			foreach ($magupdate->getMessages() as $message) {
				echo $message;
			}
		}else{
			$this->response->redirect('user/mycontentmagazine');
		}
		
	}
	public function addcontentAction()
	{
		if(!$this->request->isPost()){
			$this->response->redirect('user/mynews');
		}
		$magazineContent = new Tblmagazinenews();
		$magazineContent->magazine_id = $this->request->getPost('magazine_id');
		$magazineContent->news_id = $this->request->getPost('news_id');
		$magazineContent->status = 1;

		if($magazineContent->save()==false){
			foreach ($magazineContent->getMessages() as $message) {
				echo $message;
			}
		}else{
			$this->response->redirect('user/mycontentmagazine/edit/'.$this->request->getPost('magazine_id'));
		}
	}

	public function deleteAction($magazine_id)
	{
		$magazines = Tblmagazine::findFirstByMagazine_id($magazine_id);

		if($magazines->delete() == false){
			foreach ($news->getMessages() as $message) {
				echo $message;
			}
		}else{
			$this->response->redirect('user/mycontentmagazine');	
		}
	}
	
}
