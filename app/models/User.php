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


				// map the relationship to category models
		$this->belongsTo('id', __NAMESPACE__ .'\Tblprofile', 'user_id', 
			['foreignKey' => ['message' => 'The profile does not exist'], 'alias' => 'profile']
		);

	}
}
