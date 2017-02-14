<?php

class PlayerSummaries {

    private $realName;
    private $nickName;
    private $profileUrl;
    private $avatarUrl;

    function __construct($key, $steamId) {

        try {
            $urlPlayer = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=" . $key 
                    . "&steamids=" . $steamId;
        } catch (Exception $ex) {
            throw new Exception("Error Getting player data");
        }

        $jsonPlayer = file_get_contents($urlPlayer);

        $objPlayer = json_decode($jsonPlayer);

        $player = $objPlayer->response->players[0];


        if (isset($player->realname)) {
            $this->realName = $player->realname;
        } else {
            $this->realName = "Not defined";
        }

        if (isset($player->personaname)) {
            $this->nickName = $player->personaname;
        } else {
            $this->nickName = "Not defined";
        }

        if (isset($player->profileurl)) {
            $this->profileUrl = $player->profileurl;
        } else {
            $this->profileUrl = "URL not found";
        }

        if (isset($player->avatarfull)) {
            $this->avatarUrl = $player->avatarfull;
        } else {
            $this->avatarUrl = "Avatar not found";
        }
    }

    function getNickName() {
        return $this->nickName;
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

}
