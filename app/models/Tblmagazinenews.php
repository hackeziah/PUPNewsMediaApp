<?php
namespace NewsApp\Models;

use Phalcon\Mvc\Model;

class Tblmagazinenews extends Model
{
	public $magazinenews_id;
	public $magazine_id;
	public $news_id;
	public $timestamp;
	public $status;

	public function initialize()
	{
		$this->getSource('tblmagazinenews');
		// $this->setReadConnectionService("dbReplica");
		// $this->setWriteConnectionService("db");
		// map the relationship to category model
		// map the relationship to category model
        $this->belongsTo('profile_id', __NAMESPACE__ .'\User', 'id', 
            ['foreignKey' => ['message' => 'The section does not exist'], 'alias' => 'id']
        );
		// map the relationship to profile model

         $this->belongsTo('category', __NAMESPACE__ .'\Tblcategory', 'category_id', 
            ['foreignKey' => ['message' => 'The section does not exist'], 'alias' => 'categorys']
        );
	}

}


