<?php
session_start();
//echo uniqid();
echo $_SESSION['id'];

$startTimeStamp = strtotime(date("Y/m/d"));
$endTimeStamp = strtotime("2017/05/3");

$timeDiff = abs($endTimeStamp - $startTimeStamp);

$numberDays = $timeDiff/86400;  // 86400 seconds in one day

// and you might want to convert to integer
//echo $numberDays = intval($numberDays);
