<?php
include_once "Calculator.php";
$firstOperand = 1;
$secondOperand = 2;
$operatorOne = '+';
$operatorTwo = '-';
$operatorThree = '*';
$operatorFour = '/';
$calculator = new Calculator();
$resultOne = $calculator->calculate($firstOperand, $secondOperand, $operatorOne);
echo $resultOne . "<br>";
$resultTwo = $calculator->calculate($firstOperand, $secondOperand, $operatorTwo);
echo $resultTwo . "<br>";
$resultThree = $calculator->calculate($firstOperand, $secondOperand, $operatorThree);
echo $resultThree . "<br>";
$resultFour = $calculator->calculate($firstOperand, $secondOperand, $operatorFour);
echo $resultFour;

