<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Confirmed extends Controller {
	public $template = 'default';
	public $auto_render = TRUE;

	public function action_index(){
		$menumodel = new Model_Menu();
		View::bind_global('menu', $menumodel->getMenu());
		
		$model = new Model_Twitter();
		$model->responseRequested();
		
		$json = $model->getConfirmed();
		
		$confirmed = new Helper_Twitterparse();
		$users = $confirmed->getUsers($json);
		
		$this->response->body(
			View::factory('usertable')->bind('users',$users)
		);
		
	}
}// Controller_Confirmed end