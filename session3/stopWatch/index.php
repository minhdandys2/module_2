<?php
include "StopWatch.php";
$stopWatch = new StopWatch;
$numbers = [];
for ($i = 0; $i < 100000; $i++) {
    $number[$i] = rand(1,100000);
}
$stopWatch->start();
sort($numbers);
$stopWatch->stop();
echo round($stopWatch->getElapsedTime()*1000,4);

