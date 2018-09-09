<?php

require 'calculator.php';
require 'OperatorInterface.php';
require 'Adder.php';
require 'subtractor.php';
require 'Multiplier.php';
require 'divider.php';

$calc = new Calculator;

$calc->setOperation(new Adder);
$calc->calculate(10, 50);

$calc->setOperation(new Subtractor);
$calc->calculate(30);

$calc->setOperation(new Multiplier);
$calc->calculate(3);

$calc->setOperation(new Divider);
$calc->calculate(2);

echo $calc->getResult();