<?php
function isFibonacci($num)
{
    $a = 0;
    $b = 1;

    if ($num == $a || $num == $b) {
        return true;
    }

    while ($b < $num) {
        $c = $a + $b;
        $a = $b;
        $b = $c;

        if ($b == $num) {
            return true;
        }
    }

    return false;
}

$number = 21;
if (isFibonacci($number)) {
    echo "$number pertence à sequência de Fibonacci.\n";
} else {
    echo "$number não pertence à sequência de Fibonacci.\n";
}
