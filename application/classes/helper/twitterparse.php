<?php defined('SYSPATH') or die('No direct script access.');

class Helper_Twitterparse {


	public function getUsers($json){
		$users = json_decode($json);
		if ( $users ){
			$response = array();
			foreach ($users as $user){
				$response[] = array(
					'name' => $user['user']['name'], 
					'profile_image_url' => $user['user']['profile_image_url']
				);
			}
			return $response;
		}
		return false;
	}
}