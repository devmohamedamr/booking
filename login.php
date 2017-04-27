<?php

if(!isset($_SESSION))
{
    session_start();
}
require 'start.php';
//-----------------check---------

if(check()) {
    $dola = $_SESSION['user'][0]['username'] =='dola';
    $ola = $_SESSION['user'][0]['username'] =='ola';
    $mohamedamr = $_SESSION['user'][0]['username'] =='mohamedamr';
    if($ola)
    {
        header("LOCATION:admin/ola.php");
    }elseif($dola)
    {
        header("LOCATION:admin/dola.php");
    }elseif($mohamedamr)
    {
        header("LOCATION:admin/all.php");
    }
}

//-------------validation-------------------
$validation = new \Hispanic\Validation();

$rules  = array(
    'username'=>'required',
    'password'=>'required',
);
$validation->server($rules);
//-------------------------------------
$errors = null;

if(count($_POST)>0) {
    if (!$validation->isValid()) {
        $errors = $validation->getErrors();
    } else {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $data = R::getAll("SELECT * FROM user WHERE username='$username' AND password = '$password'");

        if ($data && count($data) > 0) {
            $_SESSION['user'] = $data;
            $permission = $_SESSION['user'][0]['username'];
            if($permission == 'ola') {
                header("LOCATION:admin/ola.php");
            } elseif ($permission == 'dola') {
                header("LOCATION:admin/dola.php");
            } elseif ($permission == 'mohamedamr') {
                header("LOCATION:admin/all.php");
            }
        }

    }
}
//-----------------view design-------------------
require BACK . '/login.html';
