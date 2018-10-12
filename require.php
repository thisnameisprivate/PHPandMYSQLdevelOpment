<?php

$a = 2;
$b = &$a;
$a = 2;
print_r($a);
echo "<br>";
print_r($b);
unset($a);
print_r($a);
echo "<br>";
print_r($b);
echo number_format($b, 2);
print_r(gettype($b));
if (settype($b, 'string')) print_r(gettype($b));