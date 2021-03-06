<?php
namespace NewsApp\Controllers\Student;

use NewsApp\Models\Tblprofile;
use NewsApp\Forms\ProfileForm;
use NewsApp\Models\Tblcategory;
use NewsApp\Models\Tblnews;


class ProfileController extends ControllerBase
{
	public function indexAction()
	{
		$id = $this->session->get('authStud');
		$user_id = $id['id'];
			// $query = $this->modelsManager->createQuery('SELECT profile_id FROM NewsApp\Models\Tblprofile WHERE user_id=:user_id:');
			// $stmt = $query->execute([
			// 	'user_id'=>$user_id,
			// ]);
		$profile= Tblprofile::findFirstByUser_id($user_id);
		$profileForm = new ProfileForm($profile);
		$this->view->profileForm = $profileForm;
		$this->view->profile = $profile;
		$this->view->profile_id = $profile->profile_id;
		$category = Tblcategory::find();
		$this->view->category = $category;
	}
	public function viewAction()
	{
		$id = $this->session->get('authStud');
		$user_id = $id['id'];
		
		
	}
	public function updateAction()
	{
		if($this->request->getPost('profile_id')){
			$tblprofile = Tblprofile::findFirstByProfile_id($this->request->getPost('profile_id'));
			if (true == $this->request->hasFiles() && $this->request->isPost()) {
				$upload_dir = __DIR__ . '/../../../public/uploads/userss/';

				if (!is_dir($upload_dir)) {
					mkdir($upload_dir, 0755);
				}
				foreach ($this->request->getUploadedFiles() as $file) {
					$file->moveTo($upload_dir . $file->getName());
					$this->flashSession->success($file->getName().' has been successfully uploaded.');
					
				}
				if($tblprofile->profilepic=='none' || strlen($file->getName()) >= 1 ){
					$tblprofile->profilepic = $file->getName();
				}
				$tblprofile->firstname = $this->request->getPost('firstname');
				$tblprofile->lastname = $this->request->getPost('lastname');
				$tblprofile->middlename = $this->request->getPost('middlename');
				$tblprofile->birthdate = $this->request->getPost('birthdate');
				$tblprofile->email = $this->request->getPost('email');
				$tblprofile->about = $this->request->getPost('about');
				$tblprofile->goals = $this->request->getPost('goals');
				if($tblprofile->save()==false){
					foreach ($tblprofile->getMessages() as $message) {
						echo $message;
					}
				}else{
					$this->response->redirect('student/profile');
				}

			}
		}
	}
	public function createnewsAction()
	{
		if(!$this->request->isPost()){
			$this->response->redirect('student/profile');
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

			
			$news->titile = $this->request->getPost('title');
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
				$this->response->redirect('student/profile');
			}
		}

	}
}

