<?php

namespace NewsApp\Models;

use Phalcon\Mvc\Model;

class User extends Model
{
	public $id;
	public $username;
	public $password;
	public $access;

	public function initialize()
	{

		$this->setSource('user');
		// $this->setReadConnectionService("dbReplica");
		// $this->setWriteConnectionService("db");
	}
}
