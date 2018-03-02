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
		$this->getSource('tblprofile');
		// $this->setSource('category');

		// map the relationship to profile model

         $this->belongsTo('user_id', __NAMESPACE__ .'user', 'id', 
            ['foreignKey' => ['message' => 'The section does not exist'], 'alias' => 'users']
        );


	}
}
