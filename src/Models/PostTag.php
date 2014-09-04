<?php

namespace Blastoff\Launchpad\Models;

class PostTag extends BaseModel
{
	
	protected function page()
	{
		return $this->belongsTo('Post');
	}
	
	protected function tag()
	{
		return $this->morphMany('Tag', 'content');
	}
	
}