<?php
    $a = 'This is a string var, but var $b will be integer and var $c will be float';
    $b = 100;
    $c = 1.55;
?>

<?php
    const RANGE_HIGH = 20;
    define('RANGE_LOW', 10);

    $tmp_rand = rand(1, 30);
    $d = "Random value is $tmp_rand";
    if( $tmp_rand >= RANGE_LOW && $tmp_rand <= RANGE_HIGH )
        $d .= " and it is between " . RANGE_LOW . " and " . RANGE_HIGH;
    elseif ( $tmp_rand < 10 )
        $d .= " and it is lesser then " . RANGE_LOW;
    else
        $d = $d . " and it is larger then " . RANGE_HIGH;
?>