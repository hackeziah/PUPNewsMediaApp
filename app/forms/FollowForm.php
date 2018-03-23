<?php

namespace NewsApp\Forms;

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Password;
use Phalcon\Forms\Element\Hidden;


class FollowForm extends Form {

	public function initialize ($entity = null)
	{
		$profile_id = new Text('profile_id');
		$this->add($profile_id);

		$user_id = new Text('user_id');
		$this->add($user_id);
	}

	public function messages()
	{
		foreach ($this->getMessages() as $message) {
			$this->flash->error($message);
		}
	}


}