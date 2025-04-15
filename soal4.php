<?php
function arraySum(array $numbers){
    $sum = 0 ;
    for($i = 0 ; $i < count($numbers) ; $i++){
        $sum += $numbers[$i];
    }
    return $sum;
}

$numbers = [1,2,3,4];
$result = arraySum($numbers);
echo "Result ".$result;
?>