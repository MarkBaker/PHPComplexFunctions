<?php

use Complex\Complex as ComplexObject;

include(__DIR__ . '/../vendor/autoload.php');
//include(__DIR__ . '/../classes/Bootstrap.php');

echo 'Create', PHP_EOL;

$x = new ComplexObject(123);
echo $x, PHP_EOL;

$x = new ComplexObject(123, 456);
echo $x, PHP_EOL;

$x = new ComplexObject(array(123,456,'j'));
echo $x, PHP_EOL;

$x = new ComplexObject('1.23e-4--2.34e-5i');
echo $x, PHP_EOL;


echo PHP_EOL, 'Add', PHP_EOL;

$x = new ComplexObject(123);
Complex\add($x, 456);
echo $x, PHP_EOL;

$x = new ComplexObject(123.456);
Complex\add($x, 789.012);
echo $x, PHP_EOL;

$x = new ComplexObject(123.456, 78.90);
Complex\add($x, new ComplexObject(-987.654, -32.1));
echo $x, PHP_EOL;

$x = new ComplexObject(123.456, 78.90);
Complex\add($x, -987.654);
echo $x, PHP_EOL;

$x = new ComplexObject(-987.654, -32.1);
Complex\add($x, new ComplexObject(0, 1));
echo $x, PHP_EOL;

$x = new ComplexObject(-987.654, -32.1);
Complex\add($x, new ComplexObject(0, -1));
echo $x, PHP_EOL;


echo PHP_EOL, 'Subtract', PHP_EOL;

$x = new ComplexObject(123);
Complex\subtract($x, 456);
echo $x, PHP_EOL;

$x = new ComplexObject(123.456);
Complex\subtract($x, 789.012);
echo $x, PHP_EOL;

$x = new ComplexObject(123.456, 78.90);
Complex\subtract($x, new ComplexObject(-987.654, -32.1));
echo $x, PHP_EOL;

$x = new ComplexObject(123.456, 78.90);
Complex\subtract($x, -987.654);
echo $x, PHP_EOL;

$x = new ComplexObject(-987.654, -32.1);
Complex\subtract($x, new ComplexObject(0, 1));
echo $x, PHP_EOL;

$x = new ComplexObject(-987.654, -32.1);
Complex\subtract($x, new ComplexObject(0, -1));
echo $x, PHP_EOL;


echo PHP_EOL, 'Multiply', PHP_EOL;

$x = new ComplexObject(123);
Complex\multiply($x, 456);
echo $x, PHP_EOL;

$x = new ComplexObject(123.456);
Complex\multiply($x, 789.012);
echo $x, PHP_EOL;

$x = new ComplexObject(123.456, 78.90);
Complex\multiply($x, new ComplexObject(-987.654, -32.1));
echo $x, PHP_EOL;

$x = new ComplexObject(123.456, 78.90);
Complex\multiply($x, -987.654);
echo $x, PHP_EOL;

$x = new ComplexObject(-987.654, -32.1);
Complex\multiply($x, new ComplexObject(0, 1));
echo $x, PHP_EOL;

$x = new ComplexObject(-987.654, -32.1);
Complex\multiply($x, new ComplexObject(0, -1));
echo $x, PHP_EOL;


echo PHP_EOL, 'Divide By', PHP_EOL;

$x = new ComplexObject(123);
Complex\divideBy($x, 456);
echo $x, PHP_EOL;

$x = new ComplexObject(123.456);
Complex\divideBy($x, 789.012);
echo $x, PHP_EOL;

$x = new ComplexObject(123.456, 78.90);
Complex\divideBy($x, new ComplexObject(-987.654, -32.1));
echo $x, PHP_EOL;

$x = new ComplexObject(123.456, 78.90);
Complex\divideBy($x, -987.654);
echo $x, PHP_EOL;

$x = new ComplexObject(-987.654, -32.1);
Complex\divideBy($x, new ComplexObject(0, 1));
echo $x, PHP_EOL;

$x = new ComplexObject(-987.654, -32.1);
Complex\divideBy($x, new ComplexObject(0, -1));
echo $x, PHP_EOL;


echo PHP_EOL, 'Divide Into', PHP_EOL;

$x = new ComplexObject(123);
Complex\divideInto($x, 456);
echo $x, PHP_EOL;

$x = new ComplexObject(123.456);
Complex\divideInto($x, 789.012);
echo $x, PHP_EOL;

$x = new ComplexObject(123.456, 78.90);
Complex\divideInto($x, new ComplexObject(-987.654, -32.1));
echo $x, PHP_EOL;

$x = new ComplexObject(123.456, 78.90);
Complex\divideInto($x, -987.654);
echo $x, PHP_EOL;

$x = new ComplexObject(-987.654, -32.1);
Complex\divideInto($x, new ComplexObject(0, 1));
echo $x, PHP_EOL;

$x = new ComplexObject(-987.654, -32.1);
Complex\divideInto($x, new ComplexObject(0, -1));
echo $x, PHP_EOL;
