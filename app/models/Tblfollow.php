<?php
namespace NewsApp\Models;

use Phalcon\Mvc\Model;

class Tblfollow extends Model
{
	public $follow_id;
	public $profile_id;
	public $follower;
	public $following;
	public $followed;
	public $timestamp;

	public function initialize()
	{
		$this->getSource('tblfollow');

		// map the relationship to category model
        $this->belongsTo('profile_id', __NAMESPACE__ .'\User', 'id', 
            ['foreignKey' => ['message' => 'The section does not exist'], 'alias' => 'id']
        );

		// map the relationship to category model
        $this->belongsTo('follower', __NAMESPACE__ .'\User', 'id', 
            ['foreignKey' => ['message' => 'The section does not exist'], 'alias' => 'id']
        );

        $this->belongsTo('following', __NAMESPACE__ .'\User', 'id', 
            ['foreignKey' => ['message' => 'The section does not exist'], 'alias' => 'id']
        );

	}

}


