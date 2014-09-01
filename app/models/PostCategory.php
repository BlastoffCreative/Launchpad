<?php

class PostCategory extends BaseModel {
	
	protected $rules = array(
		'url' => 'required|alpha_dash|unique:postscategories,url',
		'name' => 'required'
	);
	
	public function page() {
		return $this->hasMany('Page');
	}
	
}