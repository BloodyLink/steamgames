<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Steam Data</title>
        <script src="js/francis.js" type="text/javascript"></script>
        <link href="css/style.css" type="text/css" rel="stylesheet" />
    </head>
    <body onload="limpiar()">
        <input id="steamUser" type="text"/>
        <br />
        <input type="button" value="Obtener Datos" onclick="loadGameList()"/> 
        <br /><br />
        <span id="listaJuegos"></span>
    </body>
</html>
