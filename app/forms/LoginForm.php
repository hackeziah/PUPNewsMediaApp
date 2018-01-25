<?php

namespace NewsApp\Forms;

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Password;

use Phalcon\Validation\Validator\Identical;
use Phalcon\Validation\Validator\PresenceOf;

class LoginForm extends Form {

	public function initialize ($entity = null)
	{
		

		// $id = new Hidden('id');
		// $this->add($id);

		$username = new Text("username");
		$username->setAttribute('class','form-control');
		$username->addValidator(new PresenceOf (array(

			'message' =>'Please insert Username'

		)));
		$this->add($username);

		$password = new Password("password");
		$password->setAttribute('class','form-control');
		$password->addValidator(new PresenceOf (array(

			'message' => 'Please insert Password'

		)));
		$this->add($password);

	}

	public function messages()
		{
	        foreach ($this->getMessages() as $message) {
	            $this->flash->error($message);
	        }
		}


}
