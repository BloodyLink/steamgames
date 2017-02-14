<?php
//require_once('../controller/steamWebDataController.php');
//
//$user = $_GET['user'];
//
//$datos = new SteamWebDataController($user);
//
//$x = 7;
//$position = 1;
//
//echo "<table>";
//foreach($datos->getGames() as $games){
//    $hash = $games->img_logo_url;
//    
//    
//    if($position == 1){
//        echo "<tr>";
//    }
//    echo "<td>";
//    
//    echo "<img src=http://media.steampowered.com/steamcommunity/public/images/apps/"
//        . $games->appid
//        . "/" . $hash . ".jpg onerror='imgError(this);'/>";
//    
//    echo "</td>";
//    
//    if($position == $x){
//        echo "<tr>";
//        $position = 1;
//    }else{
//        $position ++;
//    }
//
//}
//echo "</table>";