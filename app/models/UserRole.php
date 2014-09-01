<?php

class UserRole extends BaseModel {
	
	public function users() {
		
		return $this->hasMany('User');
		
	}
	
}