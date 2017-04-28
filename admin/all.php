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
    }elseif($dola)
    {
        header("LOCATION:dola.php");
    }
}
$users = R::getAll( "SELECT * FROM book " );
$all = count(R::getAll( "SELECT * FROM book  " ));
$male = count(R::getAll( "SELECT * FROM book WHERE  gender = 'Male' " ));
$female = count(R::getAll( "SELECT * FROM book WHERE   gender = 'Female' " ));
//------------------------------validation--------------------------
require BACK . '/headeradmin.html';
require BACK . '/all.html';
require BACK . '/footeradmin.html';