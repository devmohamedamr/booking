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
        header("LOCATION:guest/welcome.php");
    }elseif($dola)
    {
        header("LOCATION:instructor/welcome.php");
    }elseif($mohamedamr)
    {
        header("LOCATION:admin/welcome.php");
    }
}

//print_r($_SESSION['user']);

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
                header("LOCATION:guest/start.php");
            } elseif ($permission == 'dola') {
                header("LOCATION:instructor/welcome.php");
            } elseif ($permission == 'mohamedamr') {
                header("LOCATION:Admin/welcome.php");
            }
        }

    }
}
//-----------------view design-------------------
require BACK . '/login.html';
