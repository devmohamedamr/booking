<?php
require 'start.php';
session_start();
session_destroy();
$startTimeStamp = strtotime(date("Y/m/d"));
$endTimeStamp = strtotime("2017/05/3");
$timeDiff = abs($endTimeStamp - $startTimeStamp);
$numberDays = $timeDiff/86400;  // 86400 seconds in one day
// and you might want to convert to integer
$numberDays = intval($numberDays);

require 'design/front/index.html';
