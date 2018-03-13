<?php

namespace NewsApp\Models;

use Phalcon\Mvc\Model;

class Tblannouncements extends Model
{
	
	public $announce_id;
	public $profile_id;
	public $title;
	public $content;
	public $timestamp;

	public function initialize()
	{
		$this->setSource('tblannouncements');

		// map the relationship to category models
        $this->belongsTo('profile_id', __NAMESPACE__ .'\Tblprofile', 'profile_id', 
            ['foreignKey' => ['message' => 'The profile does not exist'], 'alias' => 'profile']
        );
	
	}

}


