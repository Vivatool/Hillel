<html>
<head>
    <meta charset="UTF-8">
    <title>Homework #2.1</title>
</head>
<body>
<h1>Homework #2.1</h1>
<div>
    <?php

    //массив в котором можно легко в будущем добавлять значения, например город проживания или дату рождения
    $arr = [
        ['Генадий', '765-15-12'],
        ['Василий', '765-15-13'],
        ['Анатолий', '765-15-14'],
        ['Юлия', '765-15-15'],
        ['Александр', '765-15-16'],
        ['Анастасия', '765-15-17'],
        ['Ольга', '765-15-18'],
        ['Дмитрий', '765-15-19'],
        ['Савелий', '765-15-20'],
    ];

    //таблица версия 1  (используя  массив arr)
    echo '<table border="1" style="border-collapse:collapse;">';
    echo '<tr style="color:white;background-color:#121880;"><th>Имя</th><th>Телефон</th></tr>';
    foreach ($arr as $value) {
        echo '<tr style="color:white;background-color:#000000;"><td>'.$value[0].'</td><td>'.$value[1].'</td></tr>';
    }
    echo '</table> <br>';


    //массив с заданными ключами
    $arr2 = [
        'Генадий' => '765-15-12',
        'Василий' => '765-15-13',
        'Анатолий' => '765-15-14',
        'Юлия' => '765-15-15',
        'Александр' => '765-15-16',
        'Анастасия' => '765-15-17',
        'Ольга' => '765-15-18',
        'Дмитрий' => '765-15-19',
        'Савелий' => '765-15-20',
    ];

    //таблица версия 2 (используя массив с заданными ключами arr2)
    echo '<table border="1" style="border-collapse:collapse;">';
    echo '<tr style="color:white;background-color:#800409;"><th>Имя</th><th>Телефон</th></tr>';
    foreach ($arr2 as $key => $value) {
        echo '<tr style="color:white;background-color:#000000;"><td>'.$key.'</td><td>'.$value.'</td></tr>';
    }
    echo '</table>';

    ?>

</div>
</body>
</html>