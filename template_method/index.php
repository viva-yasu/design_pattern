<?php

require 'classes/AbstractDisplay.php';
require 'classes/CharDisplay.php';
require 'classes/StringDisplay.php';

use classes\CharDisplay;
use classes\StringDisplay;


$cd = new CharDisplay("e");
$sd = new StringDisplay("Hello, World");
$sd1 = new StringDisplay("こんにちは");
$cd->display();
$sd->display();
$sd1->display();
