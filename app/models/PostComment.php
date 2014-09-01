<?php

class PostComment extends BaseModel {
	
	protected $rules = array(
		'content' => 'required'
	);
	
	public function user() {
		return $this->belongsTo('User');
	}
	
	public function post() {
		return $this->belongsTo('Post');
	}
	
}