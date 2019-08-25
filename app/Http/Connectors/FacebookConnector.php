<?php 
namespace App\Http\Connectors;

use App\Http\Interfaces\SocialNetworkConnector;

class FacebookConnector implements SocialNetworkConnector
{
    private $login, $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function logIn(): void
    {
        echo "Send request to login a user based on " . $this->login . " and " . $this->password;
        echo "\n";
    }

    public function logOut(): void
    {
        echo "Logging out the user " . $this->login;
        echo "\n";
    }

    public function createPost($content): void
    {
        echo "Create post in the Facebook Timeline";
        echo "\n";
    }
}