<?php
ini_set('error_reporting', '-1'); // '-1' : toutes les erreurs possibles
include ('function.php');
$request = explode("/",$_SERVER ["REQUEST_URI"])[2] ;
$request = explode("?",$request)[0];


require 'Controller/' . ucfirst($request) . 'Controller.php';
//if($request=="actor"){
//    getBlock('Controller/ActorController.php',$id);
//}
//
//if($request=="director"){
//    getBlock('Controller/DirectorController.php',$id);
//}
//
//if($request=="movie"){
//    getBlock('Controller/MovieController.php',$id);
//}
//if($request=="home"){
//    getBlock('Controller/HomeController.php',$id);
//}
?>