<?php

require_once('../classes/playerSummaries.php');
require_once('../classes/steamUser.php');
require_once('../classes/gameList.php');
require_once('../classes/createImage.php');

class SteamWebDataController {

    private $key = "A470AEFE50A2598DE6D155172728340D";
    private $steamId;
    private $username;
    private $realName;
    private $nickName;
    private $profileUrl;
    private $avatarUrl;
    private $games_count;
    private $games;
    private $hoursPlayedTotal;
    private $averageTime;

    function __construct($user) {
        $this->username = $user;
        $steamUser = new User($user, $this->key);

        $this->steamId = $steamUser->getSteamId();
        $playerSum = new PlayerSummaries($this->key, $this->steamId);

        $gameList = new GameList($this->key, $this->steamId);


       


        $this->username = $steamUser->getUsername();
        $this->realName = $playerSum->getRealName();
        $this->profileUrl = $playerSum->getProfileUrl();
        $this->avatarUrl = $playerSum->getAvatarUrl();
        $this->games_count = $gameList->getGame_count();
        $this->games = $gameList->getGames();
        $this->hoursPlayedTotal = $gameList->getHoursPlayedTotal();
        $this->averageTime = $gameList->getAverageTime();
        $this->nickName = $playerSum->getNickName();
    }

    function getAverageTime() {
        return $this->averageTime;
    }

    function getNickName() {
        return $this->nickName;
    }

    function getHoursPlayedTotal() {
        return $this->hoursPlayedTotal;
    }

    function getGames_count() {
        return $this->games_count;
    }

    function getGames() {
        return $this->games;
    }

    function setGames_count($games_count) {
        $this->games_count = $games_count;
    }

    function setGames($games) {
        $this->games = $games;
    }

    function getRealName() {
        return $this->realName;
    }

    function getProfileUrl() {
        return $this->profileUrl;
    }

    function getAvatarUrl() {
        return $this->avatarUrl;
    }

    function setRealName($realName) {
        $this->realName = $realName;
    }

    function setProfileUrl($profileUrl) {
        $this->profileUrl = $profileUrl;
    }

    function setAvatarUrl($avatarUrl) {
        $this->avatarUrl = $avatarUrl;
    }

    function getSteamId() {
        return $this->steamId;
    }

    function getUsername() {
        return $this->username;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function getKey() {
        return $this->key;
    }

}
