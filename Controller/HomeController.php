<html>
<?php
ini_set('error_reporting', '-1'); // '-1' : toutes les erreurs possibles
$movie = new Movie;
$real = new Director;
$person = new Person;
$data = $movie->getBaseInfos();

getBlock('head.php');
getBlock('header.php', $data);
getBlock('View/ViewMain.php',$data[0]);
$person->getBaseInfos();
echo("<br><br>");
$real->getAllDirectors();
echo("<br><br>");
getBlock('footer.php');

?>

</html>