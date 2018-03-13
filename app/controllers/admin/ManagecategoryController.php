<?php

namespace NewsApp\Controllers\Admin;

use Phalcon\Paginator\Adapter\Model as Paginator;
use NewsApp\Models\Tblcategory;

class ManagecategoryController extends ControllerBase
{
	public function indexAction()
	{
		$cat = Tblcategory::find();
		$currentPage = $this->request->getQuery('page', 'int') ?? 1;
		$paginator = new Paginator([
			'data' => $cat,
			'limit' => 3,
			'page' => $currentPage
		]);
		
		$this->view->cat = $paginator->getPaginate();	
		
		
	}

	public function createAction()
	{
		
		if (!$this->request->isPost() && !$this->request->isAjax()) {
			return $this->response->redirect('admin/managecategory');
		}

		$category_name = $this->request->getPost('category_name');
		

		$ins = new Tblcategory();

		
		$ins->category_name	=  $category_name;
		

		if ($ins->save()) {
			
				// $this->session->set('message', 'New record has been added!');
			echo json_encode(["status" => 'ok','message' => 'Okay Here']);
			
		}

		else{
			echo json_encode(["status" => 'error','message' => 'Error Here']);
		}

		return false;

	}

	
	public function detailAction($category_id)
	{
		if (!$this->request->isPost() && !$this->request->isAjax()) {
			return $this->response->redirect('admin/managecategory');
		}

		$category_id = $this->filter->sanitize($category_id, 'int');
		
		$cat = Tblcategory::findFirst($category_id);
		echo json_encode($cat);

		if (!$cat) {
			// pag walang ganun
			$this->response->redirect('admin/managecategory');
		}

		return false;


	}

	public function editAction()
	{
		// check if post request if not redire
		if (!$this->request->isPost() && !$this->request->isAjax()) {
			return $this->response->redirect('admin/managecategory');
		}
				// $category_id = $this->filter->sanitize('category_id', 'int');
		$category_id = $this->request->getPost('category_id', 'int');
		
		
		$ins = Tblcategory::findFirst($category_id);

		if (!$ins) {
						// pag walang ganun ma record
			$this->response->redirect('admin/managecategory');
		}

	        	// $category_name = $this->request->getPost('category_name');
		
		

		
		$ins->category_name	= $this->request->getPost('category_name');
		
		if ($ins->save()) {
			
			
			echo json_encode(["status" => 'ok','message' => 'Okay Here']);
			
		}

		else {
			echo json_encode(["status" => 'error','message' => 'Error Here']);
		}

		return false;
	}

	public function deleteCatAction($category_id)
	{
		
		if (!$this->request->isPost() && !$this->request->isAjax()) {
			return $this->response->redirect('admin/managecategory');
		}

		$category_id = $this->filter->sanitize($category_id, 'int');
		
		$cat = Tblcategory::findFirst($category_id);
				// echo json_encode($cat);

		if (!$cat) {
					// pag walang ganun
			$this->response->redirect('admin/managecategory');
		}
		if ($cat->delete()) {
			echo json_encode(["status" => 'ok','message' => 'Okay Here']);
			
		} else {
			echo json_encode(["status" => 'error','message' => 'Error Here']);
			
		}
		return false;

	}

}
