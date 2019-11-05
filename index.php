<html>
<?php
include('function.php');
getBlock('head.php');
getBlock('header.php',[
    "title" => "Harakiri",
    "date" => "(1962)",]);
getBlock('body.php',[
    "bio" => "Réalisateur, scénariste et producteur japonais né le 14 février 1916 à Otaru. Il est décédé le 4 octobre 1996 à Tôkyô.",
    "nom" => "Kobayashi",
    "prenom" => "Masaki",
    "date" => "14/02/1916",
    "filmo" => "La Condition de l'homme",
    ]);
getBlock('favorite_actor.php',[
    "image1" => "<img src=\"https://media.senscritique.com/media/000018467693/130_200/Tatsuya_Nakadai.jpg\"
                 alt=\"Photo Tatsuya Nakadai\">",
    "text1" => "Tatsuya Nakadai",
    "image2" => "<img src=\"https://media.senscritique.com/media/000010810243/130_200/Akira_Ishihama.jpg\"
                 alt=\"Photo Akira Ishihama\">",
    "text2" => "Akira Ishihama",]);
$person = new Person;
$person->getBaseInfos;
getBlock('footer.php');
?>
</html>