<?php

namespace Blastoff\Launchpad\Controllers;

use Blastoff\Launchpad\Models\Post;
use View;

class PostController extends BaseController
{

	public function showPost($url)
	{
		$post = Post::where('url' => $url);
		return View::make('post')->with($post);
	}

}