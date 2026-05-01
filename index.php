<?php
$integer = 10;
$float = 7.54432;
$String = "ema";
$boolean = true;

var_dump($integer);
var_dump($float);
var_dump($String);
var_dump($boolean);

define(INTEGER, $integer);
define(FLOAT, $float);
define(STRING, $String);
define(BOOLEAN, $boolean);
