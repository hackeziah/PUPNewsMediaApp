<?php
namespace NewsApp\Models;

use Phalcon\Mvc\Model;

class Category extends Model
{
	public $CategoryId;
	public $CategoryName;

	public function initialize()
	{
		// $this->setSource('tblCategory');
		$this->getSource('category');
		// $this->setSource('category');



	}
}
