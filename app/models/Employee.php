<?php
namespace NewsApp\Models;

use Phalcon\Mvc\Model;

class Employee extends Model
{
	public $id;
	public $firstname;
	public $lastname;
	public $age;
	public $address;



	public function initialize()
	{
		$this->getSource('employee');

	}

}
