<?php
namespace NewsApp\Controllers\User;
use NewsApp\Models\Tblnews;

class ProfileController extends ControllerBase
{
	public function indexAction()
	{
		$news = Tblnews::find();
		$this->view->news = $news;		
	}


	public function editAction()
	{
			// check if post request if not redire
		if (!$this->request->isPost() && !$this->request->isAjax()) {
			return $this->response->redirect('crud');
		}

					if ( isset($_FILES) && ($_FILES["image"]["size"] > 0 )) { // if there was a file uploaded
					        // Upload.class.php -> Upload::profileImage($_FILE); // return (string)filename or null

						if (isset($_FILES["image"]["type"]) && ($_FILES["image"]["size"]) ) {
							$validextensions = array("jpeg", "jpg", "png");
							$temporary = explode(".", $_FILES["image"]["name"]);
							$file_extension = end($temporary);

					            // VALIDATE IMG FILE TYPE
							if ( (($_FILES["image"]["type"] == "image/png") || ($_FILES["image"]["type"] == "image/jpg") || ($_FILES["image"]["type"] == "image/jpeg")) 
					                && ($_FILES["image"]["size"] < 2000000) // allow only 500kb max
					                && in_array($file_extension, $validextensions) ) {
								if ($_FILES["image"]["error"] > 0) {
					                    // $upload_error = [
					                    //     'upload_error' => $_FILES["image"]["error"], 
					                    // ];
					                    // $error = (object) $upload_error; // cast array as object for response
					                    // echo json_encode($error);
									$error = "Invalid file size or file type"; 
									echo json_encode($error);
									die();
								} else {
					                    // PROCESS NEW IMG NAME
									$orig_name = $_FILES['image']['name'];
							                    $cut_orig_name = ( strlen($orig_name) > 10 ) ? substr($orig_name,0,10) : $orig_name; // if file name is > 10 characters, cut it to just 10.
							                    $new_image_name = uniqid().'_'.$cut_orig_name. '.' .$file_extension; // uniqid() = 13 chars long. $new_image_name = 23 chars long.
							                    // PROCESS FILE MOVEMENT
							                    $sourcePath = $_FILES['image']['tmp_name']; // Storing source path of the file in a variable
							                    $hard_path = dirname(__FILE__).'/../../public/uploads/'; // banktransfer image directory
							                    $targetPath = $hard_path.$new_image_name; // Target path where file is to be stored

							                    move_uploaded_file($sourcePath, $targetPath) ; // Move Uploaded file


							                    $id = $this->request->getPost('id', 'int');
							                    $ins = Employee::findFirst($id);


							                    $firstname = $this->request->getPost('firstname', ['trim', 'string']);
							                    $lastname	= $this->request->getPost('lastname');
							                    $age		= $this->request->getPost('age','int');
							                    $address  	= $this->request->getPost('address');
							                    $image  	= $this->request->getPost('address');


							                    $ins->id	=  $id;
							                    $ins->firstname	=  $firstname;
							                    $ins->lastname	=  $lastname;
							                    $ins->age 		=  $age;
							                    $ins->address 	=  $address;
							                    $ins->image      =  $new_image_name;
							                    if ($ins->save()) {

										// $this->session->set('message', 'New record has been added!');

							                    	echo json_encode(["status" => 'ok','message' => 'Okay Here']);

							                    }
							                    else {
							                    	echo json_encode(["status" => 'error','message' => 'Error Here']);
							                    }
							                    return false;

							                }
							            } else {
						                // $error = "Allowable type: jpg/jpeg/png. Max size: 2mb."; 
							            	$response = [
							            		'response' => false,
							            		'message' => 'Allowable type: jpg/jpeg/png. Max size: 2mb',
							            	];
							            	echo json_encode($error);
							            	die();
							            }
							        }
							    } else {
								        				// $new_image_name = null;
							    	$response = [
							    		'response' => false,
							    		'message' => 'Please upload image of payment',
							    	];

							    	echo json_encode($response);
							    	die();
							    }

		}//edit





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
