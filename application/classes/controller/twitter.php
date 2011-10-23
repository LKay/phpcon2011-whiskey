<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Twitter extends Controller {

	/**
	 * @var  object  OAuth_Provider
	 */
	protected $provider;

	/**
	 * @var  object  OAuth_Consumer
	 */
	protected $consumer;

	/**
	 * @var  object  OAuth_Token
	 */
	protected $token;
	
	public function before()
	{
		parent::before();
		
		// Load the cookie session
		$this->session = Session::instance();

		// Load the provider
		$this->provider = OAuth_Provider::factory('twitter');
		
		// Load the consumer
		$this->consumer = OAuth_Consumer::factory(Kohana::$config->load("oauth.twitter"));

		if ($token = $this->session->get('twitter_access'))
		{
			// Make the access token available
			$this->token = $token;
		}
		
	}

	public function action_index()
	{
		$this->action_tweets();
	}

	public function action_tweets()
	{
		$tweets = new Model_Twitter;
		
		$t = $tweets->getTweets('#phpconpl');
		
		var_dump($t);
	}

} // End Welcome
