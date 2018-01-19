<?php
namespace NewsApp\Controllers;

use NewsApp\Forms\MyForm;
use NewsApp\Models\Employee;


class EmployeeController extends ControllerMain
{

	public function indexAction()
	{
		$emps = Employee::find();
		$this->view->emps = $emps;		
	}
	public function newAction()
	{
		$myForm = new MyForm();
		$this->view->myForm = $myForm;
	}

	public function createAction()
	{
		if(!$this->request->isPost()){
			$this->response->redirect('employee');

		}
				$myForm = new MyForm();
		if (!$myForm->isValid($_POST)) {
			foreach($studentForm->getMessages() as $msg) {
				$this->flash->error($msg);
			}

			//flash to specified action
            return $this->dispatcher->forward([
                "controller" => "employee",
                "action" => "new"
            ]);
		}

		// if all good then save
		$employee = new Employee();
		$employee->firstname = $this->request->getPost('firstname', ['trim', 'string']);
		$employee->lastname = $this->request->getPost('lastname');
		$employee->age = $this->request->getPost('age', 'int');
		$employee->address = $this->request->getPost('address');
		// $employee->section_id = $this->request->getPost('section_id', 'int');

		//save here
		if ($employee->save()) {
			// redirect with message
			$this->session->set('message', 'New record has been added!');
			$this->response->redirect('employee');
		} else {
			// flash error muna
			$this->flash->error($employee->getMessages());
            return $this->dispatcher->forward([
                "controller" => "employee",
                "action" => "new"
            ]);
		}
	}
	
	public function detailAction($id)
	{
		// display student detail here
		$id = $this->filter->sanitize($id, 'int');
		
		$employee = Employee::findFirst($id);
		if (!$employee) {
			// pag walang ganun
			$this->response->redirect('employee');
		}

		$myForm = new MyForm($employee);
		$this->view->myForm = $myForm;
	}

	public function updateAction()
	{
		// check if post request if not redirect
		if (!$this->request->isPost()) {
			$this->response->redirect('employee');
		}

		$id = $this->request->getPost('id', 'int');
		$employee = Employee::findFirst($id);
		if (!$employee) {
			// pag walang ganun ma record
			$this->response->redirect('employee');
		}

		// lets do the update
		$employee->firstname = $this->request->getPost('firstname', ['trim', 'string']);
		$employee->lastname = $this->request->getPost('lastname');
		$employee->age = $this->request->getPost('age', 'int');
		$employee->address = $this->request->getPost('address');
	

		//save here
		if ($employee->save()) {
			// redirect
			$this->session->set('message', 'Student details has been updated!');
			//$this->response->redirect('employee/detail/' . $id);
			$this->response->redirect('employee');

		} else {
			// flash error muna
			$this->flash->error($employee->getMessages());
            return $this->dispatcher->forward([
                "controller" => "employee",
                "action" => "detail",
                "params" => [$id]
            ]);
		}

	}
	public function deleteAction($id)
	{
		// delete student record here
		$id = $this->filter->sanitize($id, 'int');
		
		$employee = Employee::findFirst($id);
		if (!$employee) {
			// pag walang ganun
			$this->response->redirect('student');
		}

		// delete here
		if ($employee->delete()) {
			$this->session->set('message', 'Employee record has been archived!');
			$this->response->redirect('employee');
		} else {
			$this->flash->error($student->getMessages());
            return $this->dispatcher->forward([
                "controller" => "employee",
                "action" => "index"
            ]);
		}
	}

}