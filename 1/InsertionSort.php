<?php
$toSort = [2, 5, 0, 1, 7, -1];

for ($i = 0; $i < count($toSort); $i++) {
    $val = $toSort[$i];
    $j = $i - 1;
    while ($j >= 0 && $toSort[$j] > $val) {
        $toSort[$j+1] = $toSort[$j];
        $j--;
    }
    $toSort[$j+1] = $val;
}

print_r($toSort);