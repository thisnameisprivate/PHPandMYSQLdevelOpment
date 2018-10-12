<?php

//$a = 2;
//$b = &$a;
//$a = 2;
//print_r($a);
//echo "<br>";
//print_r($b);
//unset($a);
//print_r($a);
//echo "<br>";
//print_r($b);
//echo number_format($b, 2);
//print_r(gettype($b));
//if (settype($b, 'string')) print_r(gettype($b));
//$arr = ['oil' => 20, 'Tires' => 100, 'Spark Plugs' => 4];
//asort($arr);
//print_r($arr);
//$arr = range(10, 1, -1);
//print_r($arr);
//$arr = range(1, 10);
//print_r($arr);
//print_r($_SERVER['DOCUMENT_ROOT']);
//$arr = [3, 2, 1];
//$value = end($arr);
//while ($value) {
//    print_r($value);
//    echo "<br>";
//    $value = prev($arr);
//}
$arr = [1, 1, 2, 2, 3, 2, 4, 4, 4, 4, 5];
$array_count_values = array_count_values($arr);
print_r($array_count_values);
sort($array_count_values);
print_r($array_count_values);