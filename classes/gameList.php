<?php

class GameList {

    private $game_count;
    private $games;
    private $hoursPlayedTotal;
    private $averageTime;

    function __construct($key, $steamId) {
        $sum = 0;
        $url = "http://api.steampowered.com/IPlayerService/GetOwnedGames/v0001/?key="
                . $key . "&steamid="
                . $steamId . "&format=json&"
                . "include_appinfo=1&include_played_free_games=1";

        $json = file_get_contents($url);
        $obj = json_decode($json);


        if (isset($obj->response->game_count)) {

            $this->game_count = $obj->response->game_count;
            $this->games = $obj->response->games;

            foreach ($this->games as $games) {
                $sum += $games->playtime_forever;
            }

            $this->hoursPlayedTotal = round($sum / 60, 1);
            $this->averageTime = round($this->hoursPlayedTotal/ $this->game_count, 1);
        } else {
            $this->game_count = 0;
            $this->hoursPlayedTotal = 0;
        }
    }

    function getAverageTime() {
        return $this->averageTime;
    }

    function getHoursPlayedTotal() {
        return $this->hoursPlayedTotal;
    }

    function getGame_count() {
        return $this->game_count;
    }

    function getGames() {
        return $this->games;
    }

}
