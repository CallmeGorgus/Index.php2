<?php
require 'tracy/tracy.phar';
use Tracy\Debugger;
Debugger::enable();
Debugger::$strictMode = true;

$1 = 3;
$2 = 4;
dump($1 + $2);



?>
