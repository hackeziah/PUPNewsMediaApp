<?php

namespace NewsApp\Models;

use Phalcon\Mvc\Model;
date_default_timezone_set('Asia/Manila');

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

		// $this->setReadConnectionService("dbReplica");
		// $this->setWriteConnectionService("db");

		// map the relationship to category models
		$this->belongsTo('profile_id', __NAMESPACE__ .'\Tblprofile', 'profile_id', 
			['foreignKey' => ['message' => 'The profile does not exist'], 'alias' => 'profile']
		);

	}

	public function beforeValidationOnSave()
	{
		
		$today = time();
		$now =date("d-m-Y g:i:s ", $today);
		$this->timestamp = $now ;
		$this->timestamp = new \Phalcon\Db\RawValue­('FROM_UNIXTIME(1500­000000)'); 

	}

	// public function beforeValidationOnupdate()
	// {
		
	// 	$today = time();
	// 	$now =date("d-m-Y g:i:s ", $today);
	// 	$this->timestamp = $now ;
	// 	$this->timestamp = new \Phalcon\Db\RawValue­('FROM_UNIXTIME(1500­000000)'); 

	// }
	// public function beforeUpdate()
	// {
		
	// 	$today = time();
	// 	$now =date("d-m-Y g:i:s ", $today);
	// 	$this->timestamp = $now ;
	// 	$this->timestamp = new \Phalcon\Db\RawValue­('FROM_UNIXTIME(1500­000000)'); 

	// }

}