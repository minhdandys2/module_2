<?php
function calc($x, $y)
{
    $total = $x + $y;
    $effect = $x - $y;
    $multiply = $x * $y;

    echo "$x + $y = $total";
    echo "<br>";
    echo "$x - $y = $effect";
    echo "<br>";
    echo "$x * $y = $multiply";
    echo "<br>";
    try {
        condition($x, $y);
        echo "$x / $y = " . $x / $y . "<br>";
    }
    catch (Exception $e) {
        echo 'error: ' . $e->getMessage(), "\n";
    }
}

function condition($x, $y){
    if ($y == 0) {
    throw new Exception(" by zero "."<br>");
    }
    return true;
}

calc(9, 1);
calc(0, 0);
calc(0, 4);
?>
