<?php
global $bdd;
$bdd = new PDO('mysql:host=localhost;dbname=cinefile;charset=utf8', 'root', 'mysql');

function getBlock($file, $data = [])
{
    require $file;
}

class Person
{
    function getAllBaseInfos(){
        global $bdd;
        $reponse = $bdd->query('SELECT * FROM person');
        $data = $reponse->fetchAll();
        return $data;
    }

    function getBaseInfos($lastname){
          global $bdd;
        $sql = 'SELECT *
        FROM person
        WHERE lastname < :lastname';
        $sth = $bdd->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array(':lastname' => "$lastname"));
        $data = $sth->fetchAll();
        return $data;
    }
}

class Director extends Person{
    function getAllDirectors(){
        global $bdd;
        $reponse = $bdd->query(
            'SELECT DISTINCT person.* FROM person,movieHasPerson 
                    WHERE person.id=movieHasPerson.idPerson AND movieHasPerson.role="Realisateur"');
        $data = $reponse->fetchAll();
        return $data;
    }
}

class Actor extends Person{
    function getAllActors(){
        global $bdd;
        $reponse = $bdd->query(
            'SELECT DISTINCT person.* FROM person,movieHasPerson 
                    WHERE person.id=movieHasPerson.idPerson AND movieHasPerson.role="Acteur"');
        $data = $reponse->fetchAll();
        return $data;
    }

}
class Movie
{
    function getAllMovies(){
        global $bdd;
        $reponse = $bdd->query(
            'SELECT title FROM movie'
        );
        $data = $reponse->fetchAll();
        return $data;
    }

    function getBaseInfos(){
        global $bdd;
        $reponse = $bdd->query(
            'SELECT * FROM movie'
        );
        $data = $reponse->fetchAll();
        return $data;
    }
}
