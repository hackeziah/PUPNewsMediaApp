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

		// map the relationship to category model
        $this->belongsTo('magazine_id', __NAMESPACE__ .'\Tblmagazine', 'magazine_id', 
            ['foreignKey' => ['message' => 'The section does not exist'], 'alias' => 'magazine']
        );
		// map the relationship to profile model

         $this->belongsTo('news_id', __NAMESPACE__ .'\Tblnews', 'news_id', 
            ['foreignKey' => ['message' => 'The section does not exist'], 'alias' => 'news']
        );

	}

}


