<?php

use function Challenge\findUnique;
use function Challenge\getThreeUpperletters;
use function Challenge\wordSort;

include 'vendor/autoload.php';


$testing = [
[ 'Tom Marvolo Riddle', 'I am Lord Vold           emort', 'Har           ry Potter' ],
[ '     ', 'a', ' ' ],
[ '   bbb     ', 'a    ', 'bbbf ' ],
];

foreach ($testing as $array) {
    echo PHP_EOL."|".findUnique($array)."|".PHP_EOL;
}