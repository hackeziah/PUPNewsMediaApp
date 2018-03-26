<?php
namespace NewsApp\Models;

use Phalcon\Mvc\Model;
// date_default_timezone_set('Asia/Manila');
class Tblmagazinenews extends Model
{
	public $magazinenews_id;
	public $magazine_id;
	public $news_id;
	public $status;
	public $timestamp;

	public function initialize()
	{
		$this->getSource('tblmagazinenews');
		// $this->setReadConnectionService("dbReplica");
		// $this->setWriteConnectionService("db");
		// map the relationship to category model
		// map the relationship to category model
        $this->belongsTo('magazine_id', __NAMESPACE__ .'\Tblmagazine', 'magazine_id', 
            ['foreignKey' => ['message' => 'The section does not exist'], 'alias' => 'magazine']
        );
		// map the relationship to profile model

         $this->belongsTo('news_id', __NAMESPACE__ .'\Tblnews', 'news_id', 
            ['foreignKey' => ['message' => 'The section does not exist'], 'alias' => 'news']
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


