<?php 
namespace App\Http\Posters;

use App\Http\Abstracts\SocialNetworkPoster;

class FacebookPoster extends SocialNetworkPoster
{
	private $login;
	private $password;

	function __construct(string $login, string $password)
	{
		$this->login = $login;
		$this->password = $password;
	}

	public function getSocialNetworkAccount(): SocialNetworkConnector
	{
		return new FacebookConnector($this->login, $this->password);
	}
}