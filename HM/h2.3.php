<?php

$arr = ['волк', 'кот', 'лось', 'свинья', 'гусь', 'овца', 'рысь'];
$rWords = ['ё', 'й', 'е', 'ы', 'а', 'о', 'э', 'я', 'и', 'ю', 'у'];

foreach ($arr as $value) {
    if (in_array((mb_substr($value,0,1)), $rWords)) {
        break;
    } else {
        echo $value . '<br>';
    }
}
?>

// выводит искомое слово а вверху не выводит на экран


<?php

$arr = ['волк', 'кот', 'лось', 'свинья', 'гусь', 'овца', 'рысь'];
$rWords = ['ё', 'й', 'е', 'ы', 'а', 'о', 'э', 'я', 'и', 'ю', 'у'];

foreach ($arr as $value) {
    echo $value . '<br>';
    if (in_array((mb_substr($value,0,1)), $rWords)) {
        break;
    }
}