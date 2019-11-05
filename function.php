<?php
$bdd = new PDO('mysql:host=localhost;dbname=cinefile;charset=utf8', 'root', 'mysql');

function getBlock($file, $data = [])
{
    require $file;
}

class Person
{
    function getBaseInfos(){
        echo $reponse = $bdd->query('SELECT * FROM person');
    }
}

class Director extends Person{
    function getAllDirectors(){

    }
}

class Actor extends Person{
    function getAllActors(){

    }

}
class Movie
{
    function getAllMovies(){

    }

    function getBaseInfos(){

    }
}
