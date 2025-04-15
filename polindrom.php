<?php
function isPolindrom($str){
    $str = strtolower(preg_replace("[^a-zA-Z]","",$str));
    $start = 0;
    $end = strlen($str) - 1;
    while ($start < $end) {
        if ($str[$start] != $str[$end]) {
            return false;
        }
        $start++;
        $end--;
    }
    return true;
}

$input = "racecar";
$result = isPolindrom($input);
echo $result ? 'true' : 'false'
?>