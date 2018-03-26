<?php
namespace NewsApp\Models;

use Phalcon\Mvc\Model;
// date_default_timezone_set('Asia/Manila');
class Tblcommentnews extends Model
{
	public $commentnews_id;
	public $news_id;
	public $profile_id;
	public $comment;
	public $timestamp;

	public function initialize()
	{
		$this->getSource('tblcommentnews');

		// $this->setReadConnectionService("dbReplica");
		// $this->setWriteConnectionService("db");
		// map the relationship to category model
   		// map the relationship to category model
        $this->belongsTo('profile_id', __NAMESPACE__ .'\User', 'id', 
            ['foreignKey' => ['message' => 'The section does not exist'], 'alias' => 'id']
        );

         $this->belongsTo('news_id', __NAMESPACE__ .'\Tblnews', 'news_id', 
            ['foreignKey' => ['message' => 'The section does not exist'], 'alias' => 'news']
        );


	}
	// public function beforeValidationOnSave()
	// {
		
	// 	$today = time();
	// 	$now =date("d-m-Y g:i:s ", $today);
	// 	$this->timestamp = $now ;
	// 	$this->timestamp = new \Phalcon\Db\RawValue­('FROM_UNIXTIME(1500­000000)'); 

	// }

}


