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
		
	}

	public function message()
	{
		
		foreach ($this->getMessage() as $massage) {
			$this->flash->error($message);
		}
	
	}
}


