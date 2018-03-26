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




	}


	public function theNewssAction()
	{
		$news = Tblnews::find();
		$currentPage = $this->request->getQuery('page', 'int') ?? 1;
		$paginator = new Paginator([
			'data' => $news,
			'limit' => 3,
			'page' => $currentPage
		]);

		$this->view->news = $paginator->getPaginate();	
		
		$News_id = $this->session->get('id'); 
		

	}



	
	public function shownewsAction($id)
	{
		if (!$this->request->isPost() && !$this->request->isAjax()) {
			return $this->response->redirect('admin/managenews');
		}

		$id = $this->filter->sanitize($id, 'int');

		$news = Tblnews::findFirst($id);
		echo json_encode($news);

		if (!$news) {
			// pag walang ganun
			$this->response->redirect('admin/managenews');
		}

		return false;


	}

	
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
