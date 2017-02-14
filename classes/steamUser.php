<?php

require_once ('../controller/steamWebDataController.php');

class User {

    private $username;
    private $steamId;

    function __construct($user, $key) {

        $this->username = $user;
        $urlUser = "http://api.steampowered.com/ISteamUser/ResolveVanityURL/v0001/?key="
                . $key
                . "&vanityurl="
                . $this->username;

        $jsonUser = file_get_contents($urlUser);
        $objUser = json_decode($jsonUser);

        $steamId = $objUser->response->steamid;

        $this->setSteamId($steamId);
    }

    function getUsername() {
        return $this->username;
    }

    function getSteamId() {
        return $this->steamId;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setSteamId($steamId) {
        $this->steamId = $steamId;
    }

}
