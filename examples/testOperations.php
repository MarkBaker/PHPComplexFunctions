<?php

use Complex\Complex as ComplexObject;

include(__DIR__ . '/../vendor/autoload.php');

$values = [
    new ComplexObject(123),
    new ComplexObject(456, 123),
    new ComplexObject(0.0, 456),
];

foreach ($values as $value) {
    echo $value, PHP_EOL;
}

echo 'Addition', PHP_EOL;

$result = \Complex\add(...$values);
echo '=> ', $result, PHP_EOL;

echo PHP_EOL;

echo 'Subtraction', PHP_EOL;

$result = \Complex\subtract(...$values);
echo '=> ', $result, PHP_EOL;

echo PHP_EOL;

echo 'Multiplication', PHP_EOL;

$result = \Complex\multiply(...$values);
echo '=> ', $result, PHP_EOL;
