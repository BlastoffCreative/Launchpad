<?php

class PostVersion extends BaseModel {
	
	protected $rules = array(
		'title' => 'required'
	);
	
	public function post() {
		return $this->belongsTo('Post');
	}
	
}