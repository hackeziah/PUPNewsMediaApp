<?php
namespace NewsApp\Models;

use Phalcon\Mvc\Model;

class Tblprofile extends Model
{
	public $profile_id;
	public $user_id;
	public $lastname;
	public $firstname;
	public $middlename;
	public $birthdate;
	public $profilepic;
	public $about;
	public $goals;
	public $email;


	public function initialize()
	{
		// $this->setSource('tblCategory');
		$this->setSource('tblprofile');
		// $this->setSource('category');
		// $this->setReadConnectionService("dbReplica");
		// $this->setWriteConnectionService("db");
		// map the relationship to profile model

		$this->belongsTo('user_id', __NAMESPACE__ .'\User', 'id', array(
			 'alias' => 'User'
		));
         $this->belongsTo('user_id', __NAMESPACE__ .'\User', 'id', 
            ['foreignKey' => ['message' => 'The section does not exist'], 'alias' => 'user']
        );

  //        	$this->belongsTo('profile_id', __NAMESPACE__ .'\Tblprofile', 'user_id', 
		// 	['foreignKey' => ['message' => 'The profile does not exist'], 'alias' => 'profile']
		// );

		
	}


}



