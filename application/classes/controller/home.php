<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller {
	public $template = 'default';
	public $auto_render = TRUE;
	
	public function action_index(){
		$menumodel = new Model_Menu();
		View::bind_global('menu', $menumodel->getMenu());
		
		$this->response->body(
			View::factory('home');
		);
	}
}// Controller_Requested end