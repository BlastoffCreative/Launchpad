<?php

class PageController extends BaseController {
	
	public function page($url) {
		
		$page = Page::with('version', 'comments', 'tags')
			->where('url', '=', $url)
			->where('status', '=', '1')
			->first();
		
		if($page == null) {
			
		}
		
		return View::make()
			->with(array(
				'page' => $page
			));
	}
	
	public function pages() {
		
	}
	
	public function adminPage() {
		
	}
	
	public function adminPages() {
		
	}
	
	public function adminAddPage() {
		
	}
	
	public function adminShowAddPage() {
		
	}
	
	public function adminEditPage() {
		
	}
	
	public function adminShowEditPage() {
		
	}
	
	public function adminRemovePage() {
		
	}
	
	public function adminShowRemovePage() {
		
	}
	
}