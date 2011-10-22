<?php defined('SYSPATH') or die('No direct script access.');

class Controller_TwittShit extends Controller {

	public function action_index()
	{
		$this->response->body('let\'s make twitt shit!');
	}

} // End Welcome
