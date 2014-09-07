<?php

namespace Blastoff\Launchpad\Models;

class Post extends BaseModel
{
	
	protected $rules = array(
		'url' => 'required|alpha_dash|unique:posts,url'
	);
	
	public function user()
	{
		return $this->belongsTo('User');
	}
	
	public function versions()
	{
		return $this->hasMany('PostVersion');
	}
	
	public function version()
	{
		return $this->hasOne('PostVersion');
	}
	
	public function category()
	{
		return $this->belongsTo('PostCategory');
	}
	
	public function comments()
	{
		return $this->hasMany('PostComment');
	}
	
}