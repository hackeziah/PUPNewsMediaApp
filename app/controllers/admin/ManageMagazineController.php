<?php

namespace NewsApp\Controllers\Admin;

use Phalcon\Paginator\Adapter\Model as Paginator;
use NewsApp\Models\Tblannouncements;
use NewsApp\Models\Tblnews;
use NewsApp\Models\Tblprofile;
use NewsApp\Models\Tblmagazine;

use NewsApp\Forms\ProfileForm;

class ManageMagazineController extends ControllerBase
{

	public function beforeExecuteRoute()
	{
		if(!$this->session->has('authAdmin')){
			$this->response->redirect('index');
		}
	}

	public function indexAction()
	{


		$mags = Tblmagazine::find();
		$currentPage = $this->request->getQuery('page', 'int') ?? 1;
		$paginator = new Paginator([
			'data' => $mags,
			'limit' => 3,
			'page' => $currentPage
		]);

		

		$this->view->mags = $paginator->getPaginate();	




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

	public function showmagAction($id)
	{
		if (!$this->request->isPost() && !$this->request->isAjax()) {
			return $this->response->redirect('admin/managemagazine');
		}

		$id = $this->filter->sanitize($id, 'int');

		$mag = Tblmagazine::findFirst($id);
		echo json_encode($mag);

		if (!$mag) {
			// pag walang ganun
			$this->response->redirect('admin/managemagazine');
		}

		return false;


	}

	public function deletemagAction($id)
	{

		if (!$this->request->isPost() && !$this->request->isAjax()) {
			return $this->response->redirect('admin/managemagazine');
		}

		$id = $this->filter->sanitize($id, 'int');

		$mag = Tblmagazine::findFirst($id);
			
		if (!$mag) {
					// pag walang ganun
			$this->response->redirect('admin/managemagazine');
		}
		if ($mag->delete()) {
			echo json_encode(["status" => 'ok','message' => 'Okay Here']);

		} else {
			echo json_encode(["status" => 'error','message' => 'Error Here']);

		}
		return false;

	}

}
