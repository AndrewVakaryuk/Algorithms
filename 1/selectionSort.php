<?php
function selectionSort($data)
{
    for ($i = 0; $i < count($data)-1; $i++){
        $keyMin = $i;
        for ($j = $i + 1; $j < count($data); $j++){
            if($data[$j] < $data[$keyMin]) {
                $keyMin = $j;
            }
        }
        $temp = $data[$i];
        $data[$i] = $data[$keyMin];
        $data[$keyMin] = $temp;
    }

    return $data;
}

echo implode(",",array(43,23,4,11,2,88,76,46));
echo PHP_EOL;
echo implode(",",selectionSort(array(43,23,4,11,2,88,76,46)));
echo PHP_EOL;