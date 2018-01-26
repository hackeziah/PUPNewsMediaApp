<?php

namespace NewsApp\Forms;

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Select;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Password;
use Phalcon\Forms\Element\Hidden;

// Validation
use Phalcon\Validation\Validator\StringLength;
use Phalcon\Validation\Validator\PresenceOf;



class RegistrationForm extends Form
{
	
	public function initialize ($entity = null)
	{
		
		$firstname = new Text("firstname");
		// $firstname->setAttribute('class','form-control','');
		$firstname->addValidator(new PresenceOf (array(

			'message' =>'Please insert First Name'

		)));
		$this->add($firstname);


		$lastname = new Text("lastname");
		// $lastname->setAttribute('class','form-control');
		$lastname->addValidator(new PresenceOf (array(

			'message' =>'Please insert Last Name'

		)));
		$this->add($lastname);


		$middlename = new Text("middlename");
		// $middlename->setAttribute('class','form-control');
		$middlename->addValidator(new PresenceOf (array(

			'message' =>'Please insert Middle Name'

		)));
		$this->add($middlename);

		$studentno = new Text("studentno");
		// $studentno->setAttribute('class','form-control');
		$studentno->addValidator(new PresenceOf (array(

			'message' =>'Please insert Student Nunber'

		)));
		$this->add($studentno);


		$email = new Text("email");
		// $email->setAttribute('class','form-control');
		$email->addValidator(new PresenceOf (array(

			'message' =>'Please insert Email'

		)));
		$this->add($email);

	}

	public function message()
	{
		
		foreach ($this->getMessage() as $massage) {
			$this->flash->error($message);
		}
	
	}
}


