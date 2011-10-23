<?php defined('SYSPATH') or die('No direct script access.');

class Helper_Twitterparse {


	public function getUsers($json){
		$users = json_decode($json);
		if ( $users->results ){
			$response = array();
			foreach ($users->results as $user){
				$response[$user->from_user] = array(
					'name' => $user->from_user, 
					'profile_image_url' => $user->profile_image_url
				);
			}
			ksort($response);
			return $response;
		}
		return false;
	}
}