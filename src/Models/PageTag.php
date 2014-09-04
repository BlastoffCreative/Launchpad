<?php

namespace Blastoff\Launchpad\Models;

class PageTag extends BaseModel
{
	
	public function page()
	{
		return $this->belongsTo('Page');
	}
	
	public function tag()
	{
		return $this->morphMany('Tag', 'content');
	}
	
}