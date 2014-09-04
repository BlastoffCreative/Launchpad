<?php

namespace Blastoff\Launchpad\Controllers;

class HomeController extends BaseController {

	public function showWelcome()
	{
		return View::make('hello');
	}

}
