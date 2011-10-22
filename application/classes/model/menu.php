<?php defined('SYSPATH') or die('No direct script access.');

class Model_Menu extends Model {
	private $menu = array(
		array ('active' => false, 'url' => 'home', 'name' => 'Home'),
		array ('active' => false, 'url' => 'requested', 'name' => 'Requested'),
	); 
	
	public function getMenu(){
		foreach ($this->menu as $id => $menu){
			if ( $menu->url == Request::current()->controller() ){
				$this->menu[$id]['active'] = true;
			}
		}
		return $this->menu;
	}

}// Model_Menu end