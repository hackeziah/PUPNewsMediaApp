<?php
namespace NewsApp\Controllers\Student;
use NewsApp\Models\Tblcategory;
use NewsApp\Models\Tblnews;
use NewsApp\Models\Tblmagazine;
use NewsApp\Models\Tblmagazinenews;
use NewsApp\Models\Tblprofile;

class HomeController extends ControllerBase
{
	public function beforeExecuteRoute()
	{
		if(!$this->session->has('authStud')){
			$this->response->redirect('index');
		}
	}

	public function indexAction()
	{
		$id = $this->session->get('authStud');
		$user_id = $id['id'];
		$profile = Tblprofile::findFirstByUser_id($user_id);
		$magazines =Tblmagazine::findByProfile_id($profile->profile_id);
		$this->view->magazines = $magazines;  
		$category = Tblcategory::find();
		$this->view->category = $category;
		$query = $this->modelsManager->createQuery('SELECT * FROM NewsApp\Models\Tblnews  WHERE status=1 ORDER BY timestamp DESC');
		$stmt = $query->execute();
		$this->view->news = $stmt;

	}
	public function createnewsAction()
	{
		if(!$this->request->isPost()){
			$this->response->redirect('student/home');
		}
		$news = new Tblnews();
		if (true == $this->request->hasFiles() && $this->request->isPost()) {
			$upload_dir = __DIR__ . '/../../../public/uploads/News/';

			if (!is_dir($upload_dir)) {
				mkdir($upload_dir, 0755);
			}
			foreach ($this->request->getUploadedFiles() as $file) {
				$file->moveTo($upload_dir . $file->getName());
				$this->flashSession->success($file->getName().' has been successfully uploaded.');
			}

			
			$news->title = $this->request->getPost('title');
			$news->content = $this->request->getPost('content');
			$news->category = $this->request->getPost('category');
			$news->file = 'none';
			$news->profile_id = $this->request->getPost('profile_id');
			if( strlen($file->getName()) >= 1 ){
				$news->file = $file->getName();
			}

			
			if($this->request->getPost('status') == 'private' ){
				$news->status = 0;
			}else{
				$news->status = 1;			
			}
			if($news->save()==false){
				foreach ($news->getMessages() as $message) {
					echo $message;
				}
			}else{
				$this->response->redirect('student/home');
			}
		}

	}


	public function createmagazinesAction()
	{
		if(!$this->request->isPost()){
			$this->response->redirect('student/home');
		}

		$magazine = new Tblmagazine();
		$magazine->title = $this->request->getPost('title');
		$magazine->category = $this->request->getPost('category');
		$magazine->profile_id = $this->request->getPost('profile_id');
		$magazine->content = $this->request->getPost('content');

		if($this->request->getPost('status') == 'private' ){
			$magazine->status = 0;
		}else{
			$magazine->status = 1;			
		}


		if($magazine->save()==false){
			foreach ($magazine->getMessages() as $message) {
				echo $message;
			}
		}else{
			$this->response->redirect('student/home');
		}

	}
	public function addcontentAction()
	{
		if(!$this->request->isPost()){
			$this->response->redirect('student/home');
		}


		$magazine_id = $this->request->getPost('magazine_id');
		$news_id = $this->request->getPost('news_id');

		$ins = new Tblmagazinenews();
		$ins->magazine_id = $magazine_id;
		$ins->news_id = $news_id;
		$ins->status = 1;

		if($ins->save()==false){
			foreach ($ins->getMessages() as $message) {
				echo $message;
			}
		}else{
			$this->response->redirect('student/home');
		}
	}





	// public function followbyAction()
	// {


	// 	$follower = $this->request->getPost('follower');
	// 	$following = $this->request->getPost('following');

	// 	$ins = new Tblfollow();

	// 	$ins->follower 	= $follower;
	// 	$ins->following	= $following;
	// 	$ins->followed	= 1;

	// 	if($ins->save()==false){
	// 		foreach ($ins->getMessages() as $message) {
	// 			echo $message;
	// 		}
	// 	}else{
	// 		$this->response->redirect('admin/home');
	// 	}

	// }

}
