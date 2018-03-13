<?php

namespace NewsApp\Forms;

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Password;

use Phalcon\Validation\Validator\Identical;
use Phalcon\Validation\Validator\PresenceOf;

class ProfileForm extends Form {

	public function initialize ($entity = null)
	{
		$id = new Hidden('id');
		$this->add($id);

		$lastname = new Text("lastname");
		$lastname->setAttribute('class','form-control');
		$this->add($lastname);

		$middlename = new Text("middlename");
		$middlename->setAttribute('class','form-control');
		$this->add($middlename);

		$firstname = new Text("firstname");
		$firstname->setAttribute('class','form-control');
		$this->add($firstname);

		$birthdate = new Text('birthdate');
		$birthdate->setAttribute('class','form-control');
		$this->add($birthdate);

		$email = new Text('email');
		$email->setAttribute('class','form-control');
		$this->add($email);
	}

	public function messages()
	{
		foreach ($this->getMessages() as $message) {
			$this->flash->error($message);
		}
	}


}