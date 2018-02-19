<?php

namespace NewsApp\Controllers\Admin;

use Phalcon\Paginator\Adapter\Model as Paginator;
use NewsApp\Models\Category;

class ManagecategoryController extends ControllerBase
{
	public function indexAction()
	{
		$cat = Category::find();
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

	        $CategoryName = $this->request->getPost('CategoryName');
	            

			$ins = new Category();

	   
	        $ins->CategoryName	=  $CategoryName;
	            

			if ($ins->save()) {
				
				// $this->session->set('message', 'New record has been added!');
	        		echo json_encode(["status" => 'ok','message' => 'Okay Here']);
				
				}

			else{
	        		echo json_encode(["status" => 'error','message' => 'Error Here']);
				}

		 return false;

	}

	
	public function detailAction($CategoryId)
	{
		if (!$this->request->isPost() && !$this->request->isAjax()) {
           return $this->response->redirect('admin/managecategory');
           }

		$CategoryId = $this->filter->sanitize($CategoryId, 'int');
		
		$cat = Category::findFirst($CategoryId);
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
				// $CategoryId = $this->filter->sanitize('CategoryId', 'int');
           	  	$CategoryId = $this->request->getPost('CategoryId', 'int');
				
		
				$ins = Category::findFirst($CategoryId);

				 if (!$ins) {
						// pag walang ganun ma record
					$this->response->redirect('admin/managecategory');
					}

	        	// $CategoryName = $this->request->getPost('CategoryName');
	   			
	      

	   
	      		$ins->CategoryName	= $this->request->getPost('CategoryName');
	   			
				if ($ins->save()) {
					
					
		        		echo json_encode(["status" => 'ok','message' => 'Okay Here']);
					
					}

				else {
		        		echo json_encode(["status" => 'error','message' => 'Error Here']);
					}

				 return false;
	}

	public function deleteCatAction($CategoryId)
	{
		
		if (!$this->request->isPost() && !$this->request->isAjax()) {
		           return $this->response->redirect('admin/managecategory');
		           }

				$CategoryId = $this->filter->sanitize($CategoryId, 'int');
				
				$cat = Category::findFirst($CategoryId);
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
