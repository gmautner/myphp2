<!DOCTYPE html>
<html>
  <head>
    <title>Powered By Paketo Buildpacks</title>
  </head>
  <body>
<?php

//simple counter to test sessions. should increment on each page reload.
session_start();
$count = isset($_SESSION['count']) ? $_SESSION['count'] : 1;

echo '<h1> Hit count: ';
echo $count;
echo '</h1>';

$_SESSION['count'] = ++$count;

echo '<h1> Gilberto B sem TOML Server IP Address and Port:';
echo $_SERVER['SERVER_ADDR'];
echo ': ';
echo $_SERVER['SERVER_PORT'];
echo '</h1>';

echo '<img style="display: block; margin-left: auto; margin-right: auto; width: 50%;" src="https://paketo.io/images/paketo-logo-full-color.png"></img>';

?>
  </body>
</html>
