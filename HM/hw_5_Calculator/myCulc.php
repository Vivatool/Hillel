<?php

$number1 = (int)$_POST['number1'];
$number2 = (int)$_POST['number2'];
$cal = $_POST['cal'];

switch ($cal) {
    case '+':
        $res = $number1 + $number2;
        break;
    case '-':
        $res = $number1 - $number2;
        break;
    case '*':
        $res = $number1 * $number2;
        break;
    case '/':
        if ($number2 === 0) {
            $res = "you can not divide it by zero";
        } else {
            $res = $number1 / $number2;
        }
        break;
    case '':
        $res = "make the choice of operation";
}

$operators = ['+' => 'summa', '-' => 'min', '*' => 'um', '/' => 'del'];



require_once 'shablon.php';

