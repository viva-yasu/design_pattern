<?php
use classes\Singleton;

require 'classes/Singleton.php';

$s1 = Singleton::getInstance();
$s2 = Singleton::getInstance();

echo ($s1 === $s2) . "\n";