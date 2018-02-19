<?php

namespace NewsApp\Controllers;

use NewsApp\Models\Employee;

class EmployeeController extends ControllerBase
{
	public function indexAction()
	{
		$emps = Employee::find();
		$this->view->emps = $emps;
	}

	public function createAction()
	{
		if (!$this->request->isPost() && !$this->request->isAjax()) {
		           return $this->response->redirect('crud');
		           }
		 
					$ins = new Employee();
		           		
			               // $ins->firstname	= $this->request->getPost('firstname');
			               // $ins->lastname	      = $this->request->getPost('lastname');
			               // $ins->age 	      = $this->request->getPost('age');
			               // $ins->address 		= $this->request->getPost('address');

		           	 	   $id 		= $this->request->getPost('id', 'int');
			               $firstname = $this->request->getPost('firstname', ['trim', 'string']);
			               $lastname	= $this->request->getPost('lastname');
			               $age		= $this->request->getPost('age','int');
			               $address  	= $this->request->getPost('address');
			               $ins->id	=  $id;
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


}
