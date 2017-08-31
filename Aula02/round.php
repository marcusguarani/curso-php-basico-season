<?php

$float = round(1.3);
$float = round(1.3,1);
$float = round(1.333333, 1);
$float = round(1.353333, 1);
$float = round(1.333333, 2);
$float = round(1.333333, 2, PHP_ROUND_HALF_UP);

echo $float;

