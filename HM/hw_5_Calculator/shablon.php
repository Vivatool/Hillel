<!doctype html>
<html lang="en">
<head>
    <title>Hello, world!</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="calcul.css">

</head>

<body>

<div class="container"><br>
    <form method="post" action="myCulc.php" id="myForm" class="form">
        <input type="text" size="30" name="number1" value="<?php echo $number1; ?>"/> Число 1<br/><br/>

        <?php foreach ($operators as $operator => $nameOperator) { ?>
            <input type="radio" name="cal" value="<?php echo $operator; ?>" <?php if ($operator === $cal) {
                echo 'checked';
            }
            ?> > <?php echo $nameOperator; ?><br/>
        <?php } ?>

        <br/>
        <input type="text" size="30" name="number2" value="<?php echo $number2; ?> "/> Число 2<br/><br/>
        <p><input type="submit" value="Calculate"></p>
        <hr>
        <b>Рузультат: </b><br>
            <input type="text" size="40" name="res" value="<?php echo $res; ?>">

                <a href="myCulc.php">
                    <b>Еще раз</b>
                </a>
   </form>
  <br>
</div>

</body>
</html>
