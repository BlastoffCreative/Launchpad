<?php

namespace Blastoff\Launchpad\Models;

class Tag extends BaseModel
{
	
	protected $rules = array(
		'url' => 'required|alpha_dash|unique:tags,url',
		'name' => 'required'
	);
	
	public function content()
	{
		return $this->morphTo();
	}
	
}