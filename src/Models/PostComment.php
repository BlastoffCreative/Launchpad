<?php

namespace Blastoff\Launchpad\Models;

class PostComment extends BaseModel
{
	
	protected $rules = array(
		'content' => 'required'
	);
	
	public function user()
	{
		return $this->belongsTo('User');
	}

	public function parent()
	{
		return $this->belongsTo('Comment');
	}

	public function child()
	{
		return $this->hasMany('Comment');
	}
	
	public function post()
	{
		return $this->belongsTo('Post');
	}
	
}