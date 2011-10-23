<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller {
	public $template = 'default';
	public $auto_render = TRUE;
	
	public function action_index(){
		$menumodel = new Model_Menu();
		$menu = $menumodel->getMenu();
		View::bind_global('menu', $menu);
		
		$view = View::factory('default')->set('body', View::factory('home'));
		
		$this->response->body(
			$view
		);
	}
}// Controller_Requested end