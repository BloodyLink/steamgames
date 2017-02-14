<?php

require_once ('../controller/steamWebDataController.php');

$user = $_GET['user'];

$datos = new SteamWebDataController($user);

echo "<img src=" . $datos->getAvatarUrl() . " />";
echo "<br />";
echo "<a href=" . $datos->getProfileUrl() . " >" . $datos->getProfileUrl() . "</a>";
echo "<br />";
echo "Nickname: " . $datos->getNickName();
echo "<br />";
echo "Real name: " . $datos->getRealName();
echo "<br />";
echo "Game count: " . $datos->getGames_count() .  "<br />";
echo "Total PlayTime: " . $datos->getHoursPlayedTotal() . "<br />";
echo "Avegare playtime per game: " . $datos->getAverageTime();
echo "<table>";

if($datos->getGames_count() !== 0){
    foreach ($datos->getGames() as $games) {
        $hours = round($games->playtime_forever / 60, 1);
        $hash = $games->img_logo_url;
        echo "<tr>";
        echo "<td>";
        echo "Game ID: $games->appid";
        echo "</td>";
        echo "<td>";
        echo $games->name;
        echo "</td>";
        echo "<td>";
        echo "Playtime: $hours hours";
        echo "</td>";
        echo "<td>";
        echo "<img src=http://media.steampowered.com/steamcommunity/public/images/apps/"
        . $games->appid
        . "/" . $hash . ".jpg onerror='imgError(this);'/>";
        echo "</td>";
        echo "</tr>";
    }
}else{
    echo "<tr>";
    echo "<td>";
    echo "There are no games to show :(";
    echo "</td>";
    echo "</tr>";
}

    
echo "</table>";
