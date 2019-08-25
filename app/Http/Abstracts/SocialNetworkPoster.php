<?php 
namespace App\Http\Abstracts;

abstract class SocialNetworkPoster
{
	abstract public function getSocialNetworkAccount(): SocialNetworkConnector;

	public function post($content): void
	{
		$socialNetwork = $this->getSocialNetworkAccount();

		$socialNetwork->logIn();
		$socialNetwork->createPost($content);
		$socialNetwork->logOut();
	}
}