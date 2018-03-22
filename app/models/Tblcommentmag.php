<?php
namespace NewsApp\Models;

use Phalcon\Mvc\Model;

class Tblcommentmag extends Model
{
	public $commentmag_id;
	public $magazine_id;
	public $profile_id;
	public $comment;
	public $timestamp;

	public function initialize()
	{
		$this->getSource('tblcommentmag');
		// $this->setReadConnectionService("dbReplica");
		// $this->setWriteConnectionService("db");
		// map the relationship to category model
		$this->belongsTo('profile_id', __NAMESPACE__ .'\User', 'id', 
			['foreignKey' => ['message' => 'The section does not exist'], 'alias' => 'id']
		);

		$this->belongsTo('magazine_id', __NAMESPACE__ .'\Tblmagazine', 'magazine_id', 
			['foreignKey' => ['message' => 'The section does not exist'], 'alias' => 'magazine']
		);

	}

}


