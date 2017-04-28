<?php

if(!isset($_SESSION))
{
    session_start();
}
require '../start.php';
//-----------------check---------

if(!check()) {
    header("LOCATION:../login.php");
}elseif(check()) {
    $dola = $_SESSION['user'][0]['username'] =='dola';
    $ola = $_SESSION['user'][0]['username'] =='ola';
    $mohamedamr = $_SESSION['user'][0]['username'] =='mohamedamr';
    if($ola)
    {
        header("LOCATION:ola.php");
    }
    elseif($mohamedamr)
    {
        header("LOCATION:all.php");
    }
}
$users = R::getAll( "SELECT * FROM book WHERE organizer = 'اعتدال' " );
$all = count(R::getAll( "SELECT * FROM book WHERE organizer = 'اعتدال' " ));
$male = count(R::getAll( "SELECT * FROM book WHERE organizer = 'اعتدال' && gender = 'Male' " ));
$female = count(R::getAll( "SELECT * FROM book WHERE organizer = 'اعتدال' && gender = 'Female' " ));
//------------------------------validation--------------------------
require BACK . '/headeradmin.html';
require BACK . '/dola.html';
require BACK . '/footeradmin.html';