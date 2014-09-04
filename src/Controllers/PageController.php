<?php

namespace Blastoff\Launchpad\Controllers;

use Blastoff\Launchpad\Models\Page;
use View;

class PageController extends BaseController
{
	
	/**
	 * Returns a view of a page based on a provided url
	 *
	 * @param string, url
	 * @return Response
	 */
	public function page($url)
	{
		$page = Page::where('url' => $url);
		return View::make('page')->with($page);
	}

}