<?php

namespace Blastoff\Launchpad\Models;

class PageVersion extends BaseModel
{
	
	protected $rules = array(
		'title' => 'required'
	);
	
	public function page()
	{
		return $this->belongsTo('Page');
	}
}