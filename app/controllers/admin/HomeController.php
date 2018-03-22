<?php

namespace NewsApp\Controllers\Admin;
use NewsApp\Models\Tblcategory;
use NewsApp\Models\Tblnews;
class HomeController extends ControllerBase
{
	public function indexAction()
	{
		$id = $this->session->get('authAdmin');
		$user_id = $id['id'];
		//echo 'Student Page By Admin';
		// exit;

		$category = Tblcategory::find();
		$this->view->category = $category;
		$query = $this->modelsManager->createQuery('SELECT * FROM NewsApp\Models\Tblnews  WHERE status=1 ORDER BY timestamp DESC');
		$stmt = $query->execute();
		$this->view->news = $stmt;

	}
	public function createnewsAction()
	{
		if(!$this->request->isPost()){
			$this->response->redirect('admin/home');
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
				$this->response->redirect('admin/home');
			}
		}

	}


	
	
}
