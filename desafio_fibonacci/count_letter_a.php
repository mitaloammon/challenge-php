<?php
function countLetterA($str)
{
    return substr_count(strtolower($str), 'a');
}

$string = "Abracadabra";
$count = countLetterA($string);
echo "A letra 'a' aparece $count vezes na string.\n";
