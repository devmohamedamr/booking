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

    if($dola)
    {
        header("LOCATION:dola.php");
    }elseif($mohamedamr)
    {
        header("LOCATION:all.php");
    }
}

$users = R::getAll( "SELECT * FROM book WHERE organizer = 'علا'" );
//$users = R::findAll('book');
?>
<html>
<head>
    <title>كل الطلاب </title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body onload="window.print();">


<table class="table">
    <thead>
    <tr>
        <th>#</th>
        <th>الاسم</th>
        <th>رقم الطلب</th>
        <th>التي شيرت</th>
        <th>الالوان</th>
        <th>كلاكت اخيرا اتخرجت</th>
        <th>البالون</th>
        <th>حجم التي شيرت</th>
    </tr>
    </thead>
    <tbody>
    <?php $i = 1; ?>
    <?php foreach ($users as $u) { ?>
        <tr>
            <th scope="row"><?php echo $i;?></th>
            <td><?php echo $u['fullname']; ?></td>
            <td><?php echo $u['uniqid']; ?></td>
            <td><?php  if(isset($u['tshirt'])>0) { echo 'نعم'; }else { echo 'لا';} ?></td>
            <td><?php  if(isset($u['color'])>0) { echo 'نعم'; }else { echo 'لا';} ?></td>
            <td><?php  if(isset($u['kelaket'])>0) { echo 'نعم'; }else { echo 'لا';} ?></td>
            <td><?php  if(isset($u['palon'])>0) { echo 'نعم'; }else { echo 'لا';} ?></td>
            <td><?php echo $u['size']; ?></td>
        </tr>
        <?php $i++;} ?>

    </tbody>
</table>


</body>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</html>