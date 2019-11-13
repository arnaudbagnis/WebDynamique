<html>
<?php
ini_set('error_reporting', '-1'); // '-1' : toutes les erreurs possibles
include('function.php');
$movie = new Movie;
$real = new Director;
$person = new Person;


getBlock('head.php');
getBlock('header.php', $movie->getBaseInfos());
getBlock('main_body.php');
getBlock('favorite_actor.php');
$person->getBaseInfos();
echo("<br><br>");
$real->getAllDirectors();
echo("<br><br>");


getBlock('footer.php');

?>

</html>