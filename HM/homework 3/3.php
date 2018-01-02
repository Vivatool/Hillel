<?php
$a = ['abracadabra', '23', 'rrr'];

function tudasuda($a) {
    $b = [];
    while ($b[] = array_pop($a)) {
    }
    array_pop($b);
    return $b;
}

var_dump(tudasuda($a));

$str = 'taekwondo';

$split = str_split($str);

echo '<br>';

$result = implode("", tudasuda($split));

echo $result;

// переворачивает строку не используя уже готовый вариант strrev
