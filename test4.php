<?php
// make integer value to palindrom
$number = 484492298;
$number = (string) $number;
$number = str_split($number);
$result = array();
for ($i=0; $i<count($number); $i++) {
    for ($j=0; $j<count($number); $j++) {
        $temp = $number;
        $temp = array_slice($temp, $i, $j+1);
        $temp = implode("", $temp);
        if ($temp == strrev($temp)) {
            $result[] = $temp;
        }
    }
}

print_r(array_unique($result));
?>