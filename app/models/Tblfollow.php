<?php
namespace NewsApp\Models;

use Phalcon\Mvc\Model;
date_default_timezone_set('Asia/Manila');
class Tblfollow extends Model
{
	// public $follow_id;
	public $follower;
	public $following;
	public $followed;
	public $timestamp;

	public function initialize()
	{
		$this->getSource('tblfollow');
		// $this->setWriteConnectionService("dbReplica");
		// $this->setWriteConnectionService("db");
		// map the relationship to category model
  //       $this->belongsTo('follower', __NAMESPACE__ .'\User', 'id', 
  //           ['foreignKey' => ['message' => 'The section does not exist'], 'alias' => 'id']
  //       );

		// // map the relationship to category model
  //       $this->belongsTo('following', __NAMESPACE__ .'\User', 'id', 
  //           ['foreignKey' => ['message' => 'The section does not exist'], 'alias' => 'id']
  //       );

   

	}


	public function beforeValidationOnSave()
	{
		// $this->followed = 1;
		
		$today = time();
		$now =date("d-m-Y g:i:s ", $today);
		$this->timestamp = $now ;
		$this->timestamp = new \Phalcon\Db\RawValue­('FROM_UNIXTIME(1500­000000)'); 

	}

}


