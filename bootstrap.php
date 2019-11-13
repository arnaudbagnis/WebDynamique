<?php
$request = explode("/",$_SERVER ["REQUEST_URI"])[2] ;
echo $request;
if($request=="actor"){
    include('Controller/ActorController.php');
}

if($request=="director"){
    include('Controller/DirectorController.php');
}

if($request=="movie"){
    include('Controller/MovieController.php');
}
if($request=="home"){
    include('Controller/HomeController.php');
}
?>