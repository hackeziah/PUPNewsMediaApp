<?php
namespace NewsApp\Models;

use Phalcon\Mvc\Model;
// date_default_timezone_set('Asia/Manila');
class Tblmagazine extends Model
{
	public $magazine_id;
	public $profile_id;
	public $title;
	public $category;
	public $file;
	public $status;
	public $timestamp;

	public function initialize()
	{
		$this->getSource('tblmagazine');
		// $this->setReadConnectionService("dbReplica");
		// $this->setWriteConnectionService("db");
		// map the relationship to category model
	
		$this->belongsTo('profile_id', __NAMESPACE__ .'\Tblprofile', 'profile_id', 
			['foreignKey' => ['message' => 'The section does not exist'], 'alias' => 'profile']
		);

		// map the relationship to profile model

		$this->belongsTo('category', __NAMESPACE__ .'\Tblcategory', 'category_id', 
			['foreignKey' => ['message' => 'The section does not exist'], 'alias' => 'categories']
		);


	}

	
	// public function beforeValidationOnSave()
	// {
	// 	// $this->followed = 1;
		
	// 	$today = time();
	// 	$now =date("d-m-Y g:i:s ", $today);
	// 	$this->timestamp = $now ;
	// 	$this->timestamp = new \Phalcon\Db\RawValue­('FROM_UNIXTIME(1500­000000)'); 

	// }


}


