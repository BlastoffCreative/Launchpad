<?php

namespace Blastoff\Launchpad\Models;

class PageComment extends BaseModel
{
	
	protected $rules = array(
		'content' => 'required'
	);
	
	public function user()
	{
		return $this->belongsTo('User');
	}
	
	public function page()
	{
		return $this->belongsTo('Page');
	}
	
}