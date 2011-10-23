<?php
class Model_Twitter extends Model {

	public $screen_name = NULL;
	public $password = NULL;
	
	public function getConfirmed()
	{
		
	}
	
	public function getTweets($query, $until = NULL)
	{
		if (isset($until))
		{
			if (is_int($until))
			{
				$until = date('Y-m-d', $until);
			}
			else
			{
				$until = date('Y-m-d', strtotime($until));
			}
		}
		
		$params = array(
			'q' => $query,
			'until' => $until,
			'result_type' => 'mixed',
			'with_twitter_user_id' => TRUE,
		);
		
		$request = Request::factory('http://search.twitter.com/search.json'.URL::query($params));
		
		$response = $request->execute();
		
		return $response->body();
	} 
	
	public function getRequested($limit = NULL)
	{
		//return $this->_api->getUserTimeline(array(), 'json');
		
		$params = array(
			'include_entities' => TRUE,
			'include_rts' => TRUE,
			'screen_name' => $this->screen_name,
			'count' => 200
		);
		
		$request = Request::factory('https://api.twitter.com/1/statuses/user_timeline.json?'
			.URL::query($params));
			
		$response = $request->execute();
		
		var_dump($response->body());
		 
		 
	}
	
	public function responseRequested()
	{
		
	}

} // Model_Twitter End
