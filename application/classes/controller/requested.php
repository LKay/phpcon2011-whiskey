<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Requested extends Controller {
	public $template = 'default';
	public $auto_render = TRUE;
	
	public function action_index(){
		$menumodel = new Model_Menu();
		$menu = $menumodel->getMenu();
		View::bind_global('menu', $menu);
		$view = View::factory('default');
		 
		$model = new Model_Twitter();
		
		$json = $model->getTweets("#phpcon2011-let-them-win-whiskey");
		
		$body = View::factory('usertable')->bind('users',$users);
		$confirmed = new Helper_Twitterparse();
		$users = $confirmed->getUsers($json);
		
		$this->response->body(
			$view->set('body', $body)
		);
	}
	
	public function action_refresh_list()
	{
		$model = new Model_Twitter();
		
		$json = $model->getTweets("#phpcon2011-let-them-win-whiskey");
		
		$body = View::factory('usertable')->bind('users',$users);
		$confirmed = new Helper_Twitterparse();
		$users = $confirmed->getUsers($json);
		
		$this->response->body(
			$body
		);
	}
	
}// Controller_Requested end