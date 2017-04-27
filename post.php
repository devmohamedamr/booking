<?php
require 'start.php';
session_start();
//--------------validation--------------------
$validation = new \Hispanic\Validation();

$rules  = array(
    'name'=>'required|min_length:4|max_length:80',
    'number'=>'required|min_length:4|max_length:20',
    'phone'=>'required|min_length:4|max_length:20',
    'gender'=>'required',
    'organizer'=>'required',
    'size'=>'required',
    't-shirt'=>'min_length:4|max_length:20',
    'color'=>'min_length:4|max_length:20',
    'palon'=>'min_length:4|max_length:20',
    'klaket'=>'min_length:4|max_length:20',
);
$validation->server($rules);
//--------------end validation -------

if(count($_POST)>0)
{
    $data = R::dispense('book');
        $uniqid = uniqid();
        $_SESSION['id'] = $uniqid;
        $name = $_POST['name'];
        $number = $_POST['number'];
        $phone =  $_POST['phone'];
        $gender = $_POST['gender'];
        $size = $_POST['size'];
        $organizer = $_POST['organizer'];
        $_SESSION['name'] = $name;
        $_SESSION['phone'] = $phone;
        $_SESSION['size'] = $size;
        $_SESSION['organizer'] = $organizer;
        //chekbox
        if(isset($_POST['t-shirt'])>0)
        {
            $tshirt =  $_POST['t-shirt'];
            $data->tshirt = $tshirt;
            $_SESSION['tshirt'] = $tshirt;
        }
        if(isset($_POST['color'])>0)
        {
            $colors =  $_POST['color'];
            $data->color = $colors;
            $_SESSION['color'] = $colors;
        }

        if(isset($_POST['palon'])>0)
        {
            $palon =  $_POST['palon'];
            $data->palon = $palon;
            $_SESSION['palon'] = $palon;
        }
        if(isset($_POST['klaket'])>0)
        {
            $klaket =  $_POST['klaket'];
            $data->kelaket = $klaket;
            $_SESSION['kalket'] = $klaket;
        }

    $data->uniqid = $uniqid;
    $data->fullname = $name;
    $data->groupnum = $number;
    $data->phone = $phone;
    $data->gender = $gender;
    $data->size = $size;
    $data->organizer = $organizer;

    R::store($data);
}
//---------------view all interest-------
header("LOCATION:printy.php");
