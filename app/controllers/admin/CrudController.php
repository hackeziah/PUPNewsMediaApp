<?php
namespace NewsApp\Controller\Admin;

// use NewsApp\Forms\MyForm;
use Phalcon\Paginator\Adapter\Model as Paginator;
use NewsApp\Models\Employee;


class CrudController extends ControllerMain
{

	public function indexAction()
	{
		
		
		$emps = Employee::find();
		$currentPage = $this->request->getQuery('page', 'int') ?? 1;
       	$paginator = new Paginator([
           'data' => $emps,
           'limit' => 3,
           'page' => $currentPage
       ]);
   	// $this->view->disable();
       $this->view->emps = $paginator->getPaginate();	
        // $this->view->emps = $emps;		
    
		
	}

	public function createAction()
	{
		
		if (!$this->request->isPost() && !$this->request->isAjax()) {
           return $this->response->redirect('crud');
           }

	             $firstname = $this->request->getPost('firstname');
	             $lastname	= $this->request->getPost('lastname');
	             $age		= $this->request->getPost('age');
	             $address  	= $this->request->getPost('address');

			$ins = new Employee();

	   
	               $ins->firstname	=  $firstname;
	               $ins->lastname	=  $lastname;
	               $ins->age 		=  $age;
	               $ins->address 	=  $address;

			if ($ins->save()) {
				
				// $this->session->set('message', 'New record has been added!');
	        		echo json_encode(["status" => 'ok','message' => 'Okay Here']);
				
				}

			else{
	        		echo json_encode(["status" => 'error','message' => 'Error Here']);
				}

		 return false;

	}

	
	public function detailAction($id)
	{
		if (!$this->request->isPost() && !$this->request->isAjax()) {
           return $this->response->redirect('crud');
           }

		$id = $this->filter->sanitize($id, 'int');
		
		$emps = Employee::findFirst($id);
		echo json_encode($emps);

		if (!$emps) {
			// pag walang ganun
			$this->response->redirect('crud');
		}

	   	return false;


	}

	public function editAction()
	{
		// check if post request if not redire
		if (!$this->request->isPost() && !$this->request->isAjax()) {
           return $this->response->redirect('crud');
           }
           	  	$id = $this->request->getPost('id', 'int');

				 $ins = Employee::findFirst($id);

				 if (!$ins) {
						// pag walang ganun ma record
					$this->response->redirect('crud');
					}

	   
	             $firstname = $this->request->getPost('firstname', ['trim', 'string']);
	             $lastname	= $this->request->getPost('lastname');
	             $age		= $this->request->getPost('age','int');
	             $address  	= $this->request->getPost('address');

	               // $ins->id	=  $id;
	               $ins->firstname	=  $firstname;
	               $ins->lastname	=  $lastname;
	               $ins->age 		=  $age;
	               $ins->address 	=  $address;
	                

				if ($ins->save()) {
					
					// $this->session->set('message', 'New record has been added!');
		        		
		        		echo json_encode(["status" => 'ok','message' => 'Okay Here']);
					
					}

				else {
		        		echo json_encode(["status" => 'error','message' => 'Error Here']);
					}

				 return false;
	}
	public function deleteEmpAction($id)
	{
		
	if (!$this->request->isPost() && !$this->request->isAjax()) {
	           return $this->response->redirect('crud');
	           }

			$id = $this->filter->sanitize($id, 'int');
			
			$emps = Employee::findFirst($id);
			// echo json_encode($emps);

			if (!$emps) {
				// pag walang ganun
				$this->response->redirect('crud');
			}
		if ($emps->delete()) {
					echo json_encode(["status" => 'ok','message' => 'Okay Here']);
				
			} else {
		        	echo json_encode(["status" => 'error','message' => 'Error Here']);
				
			}
		   	return false;

	}

}