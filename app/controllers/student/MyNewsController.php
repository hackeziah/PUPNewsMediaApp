<?php

namespace NewsApp\Controllers\Student;
use NewsApp\Models\Tblprofile;
use NewsApp\Forms\ProfileForm;
use NewsApp\Models\Tblcategory;
use NewsApp\Models\Tblnews;

class MyNewsController extends ControllerBase
{



	public function beforeExecuteRoute()
	{
		if(!$this->session->has('authStud')){
			$this->response->redirect('index');
		}
	}

	public function indexAction()
	{
		//echo 'Student Page By user';
		// exit;
		$id = $this->session->get('authStud');
		$user_id = $id['id'];
		$profile= Tblprofile::findFirstByUser_id($user_id);
		$profile_id = $profile->profile_id;
		$query = $this->modelsManager->createQuery('SELECT * FROM NewsApp\Models\Tblnews  WHERE profile_id = :profile_id:  ORDER BY timestamp DESC');
		$stmt = $query->execute([
			'profile_id'=>$profile_id,
		]);
		$this->view->news = $stmt;
		$category = Tblcategory::find();
		$this->view->category = $category;
	}
	public function updateAction()
	{
		if(!$this->request->isPost()){
			$this->response->redirect('student/mynews');
		}

		$newsupdate = Tblnews::findFirstByNews_id($this->request->getPost('news_id'));

		if (true == $this->request->hasFiles() && $this->request->isPost()) {
			$upload_dir = __DIR__ . '/../../../public/uploads/News/';

			if (!is_dir($upload_dir)) {
				mkdir($upload_dir, 0755);
			}
			foreach ($this->request->getUploadedFiles() as $file) {
				$file->moveTo($upload_dir . $file->getName());
				$this->flashSession->success($file->getName().' has been successfully uploaded.');
			}
		}


		$newsupdate->title = $this->request->getPost('title');
		$newsupdate->content = $this->request->getPost('content');
		$newsupdate->category = $this->request->getPost('category');	
		$newsupdate->file = 'none.png';
		if( strlen($file->getName()) >= 1 ){
			$newsupdate->file = $file->getName();
		}


		if($this->request->getPost('status') == 'private' ){
			$newsupdate->status = 0;
		}else{
			$newsupdate->status = 1;			
		}
		if($newsupdate->save()==false){
			foreach ($newsupdate->getMessages() as $message) {
				echo $message;
			}
		}else{
			$this->response->redirect('student/mynews');
		}
		
	}
	
	public function deleteAction($news_id)
	{
		$news = Tblnews::findFirstByNews_id($news_id);

		if($news->delete() == false){
			foreach ($news->getMessages() as $message) {
				echo $message;
			}
		}else{
			$this->response->redirect('student/mynews');	
		}
	}
	
}
