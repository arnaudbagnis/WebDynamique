<?php
$movie = new Movie;
$act = new Actor;
$person = new Person;
$id = $_GET['id'];

getBlock('head.php');
getBlock('header.php', $movie->getBaseInfos());
getBlock('View/ViewActor.php', $act->getBaseInfos($id));
$person->getBaseInfos();
echo("<br><br>");
$real->getAllDirectors();
echo("<br><br>");


getBlock('footer.php');



