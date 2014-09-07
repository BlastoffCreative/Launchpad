<?php

namespace Blastoff\Launchpad\Controllers;

use Blastoff\Launchpad\Models\Page;
use View;

class PageController extends BaseController
{
	//Displays 1 Page
	public function page($url) {
		
		$page = Page::with('version', 'comments')
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
	
	//Displays All Pages
	public function pages() {
		
		$pages = Page::all();
		
		return View::make()
			->with(array(
				'pages' => $pages
			));
			
	}
	
	//Admin Show 1 Page -- Probably won't be used, but here in case
	public function adminPage($id) {
		
		$page = Page::where('id', '=', $id)
			->first();
		
		return View::make()
			->with(array(
				'page' => $page
			));
	}
	
	//Admin Show page list
	public function adminPages() {
		
		$pages = Page::all();
		
		return View::make()
			->with(array(
				'pages' => $pages
			));
		
	}
	
	//Add a page via admin
	public function adminAddPage() {
		
		$p = new Page();
		
		if($p->validate(Input::all())) {
			
			$page = new Page();
			$page->url = Input::get('title');
			$page->user_id = Auth::user()->id;
			$page->status = Input::get('status');
			$page->save();
			
		}
		
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