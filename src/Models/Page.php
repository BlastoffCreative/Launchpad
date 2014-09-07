<?php

namespace Blastoff\Launchpad\Models;

class Page extends BaseModel
{
	
	protected $rules = array(
		'url' => 'required|alpha_dash|unique:pages,url'
	);
	
	public function user()
	{
		return $this->belongsTo('User');
	}
	
	public function versions()
	{
		return $this->hasMany('PageVersion');
	}
	
	public function version()
	{
		return $this->hasOne('PageVersion');
	}
	
	public function comments()
	{
		return $this->hasMany('PageComment');
	}
	
}