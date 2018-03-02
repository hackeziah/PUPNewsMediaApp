<?php
namespace NewsApp\Models;

use Phalcon\Mvc\Model;

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

		// map the relationship to category model
        $this->belongsTo('profile_id', __NAMESPACE__ .'User', 'id', 
            ['foreignKey' => ['message' => 'The section does not exist'], 'alias' => 'id']
        );
		// map the relationship to profile model

         $this->belongsTo('category', __NAMESPACE__ .'\Tblcategory', 'category_id', 
            ['foreignKey' => ['message' => 'The section does not exist'], 'alias' => 'categorys']
        );

	}

}


