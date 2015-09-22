<?php
require 'classes/Banner.php';
require 'interfaces/Show.php';
require 'classes/PrintBanner.php';

use classes\PrintBanner;
use interfaces\Show;

/** @var Show $s */
$s = new PrintBanner("Hello");
$s->printWeak();
$s->printStrong();