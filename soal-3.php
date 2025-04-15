<?php

function sortCROW($test) {
    usort($test, function($a, $b) {
        if ($a['name'] < $b['name']) {
            return -1; 
        } elseif ($a['name'] > $b['name']) {
            return 1;
        } else {

          if ($a['age'] < $b['age']) {
                return -1;
            } elseif ($a['age'] > $b['age']) {
                return 1; 
            } else {
  
                if ($a['breed'] < $b['breed']) {
                    return -1; 
                } elseif ($a['breed'] > $b['breed']) {
                    return 1;
                } else {
                    return 0; 
                }
            }
        }
    });
    return $test;
}


$test = [
   ['name' => 'Belle', 'age' => 3, 'breed' => 'Angus'],
    ['name' => 'Anna', 'age' => 2, 'breed' => 'Holstein'],
];


$sortedCrows = sortCROW($test);
print_r($sortedCrows);

?>