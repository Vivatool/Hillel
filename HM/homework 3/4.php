// переделывает в римские

<?php
function to_roman($num_query) {

    $num = intval($num_query);
    if (!$num) {
        return($num_query);
        die;
    }
    if ($num >= 4000) {
        return($num_query);
        die;
    }

    $roman = array (
        "0" => array('', 'I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX'),

        "1" => array('', 'X', 'XX', 'XXX', 'XL', 'L', 'LX', 'LXX', 'LXXX', 'XC'),

        "2" => array('', 'C', 'CC', 'CCC', 'CD', 'D', 'DC', 'DCC', 'DCCC', 'CM'),
            
        "3" => array(
            "1" => "M", //1000
            "2" => "MM",
            "3" => "MMM"
        )

    );

    $numlen = strlen( $num );
    $num_query = "";
    for ($nums=0; $nums < $numlen; $nums++){

        $pos = $nums+1;
        $num_interval = @substr($num, -$pos, 1);
        $num_query = @strtr($num_interval, $roman[$nums]).$num_query;

    }

    return($num_query);

}
$a = to_roman(582);

var_dump($a);
