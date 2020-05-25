<?php

require __DIR__ . '/vendor/autoload.php';

use Tracy\Debugger;

Debugger::enable();
Debugger::$strictMode = true;

require 'skola.php'; 
