<?php
namespace NewsApp\Models;

use Phalcon\Mvc\Model;

class Tblcategory extends Model
{
	public $category_id;
	public $category_name;

	public function initialize()
	{
		// $this->setSource('tblCategory');
		$this->getSource('tblcategory');
		// $this->setSource('category');


		// $this->setReadConnectionService("dbReplica");
		// $this->setWriteConnectionService("db");

}
}
