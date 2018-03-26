<?php

namespace NewsApp\Forms;

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Password;
use Phalcon\Forms\Element\Hidden;
use Phalcon\Forms\Element\Textarea;

use Phalcon\Validation\Validator\Identical;
use Phalcon\Validation\Validator\PresenceOf;

class ProfileForm extends Form {

	public function initialize ($entity = null)
	{
		$profile_id = new Hidden('profile_id');
		$this->add($profile_id);

		$lastname = new Text("lastname");
		$lastname->setLabel('Last Name');
		$lastname->setAttribute('class','form-control');
		$this->add($lastname);

		$middlename = new Text("middlename");
		$middlename->setLabel('Middle Name');
		$middlename->setAttribute('class','form-control');
		$this->add($middlename);

		$firstname = new Text("firstname");
		$firstname->setLabel('First Name');
		$firstname->setAttribute('class','form-control');
		$this->add($firstname);

		$email = new Text('email');
		$email->setAttribute('class','form-control');
		$this->add($email);

		$birthdate = new Text('birthdate');
		$birthdate->setAttribute('class','form-control');
		$this->add($birthdate);

		$about = new Textarea('about');
		$about->setAttribute('class','form-control no-resize');
		$about->setAttribute('rows','5');
		$this->add($about);

		$goals = new Textarea('goals');
		$goals->setAttribute('class','form-control no-resize');
		$goals->setAttribute('rows','5');
		$this->add($goals);

        //     <div class="form-line">
        //   <textarea  name="content" rows="5" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
        // </div>
	}

	public function messages()
	{
		foreach ($this->getMessages() as $message) {
			$this->flash->error($message);
		}
	}


}