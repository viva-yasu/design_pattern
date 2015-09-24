<?php

require 'classes/framework/Product.php';
require 'classes/framework/Factory.php';
require 'classes/idcard/IDCard.php';
require 'classes/idcard/IDCardFactory.php';

use classes\idcard\IDCardFactory;

/** @var IDCardFactory $f */
$f = new IDCardFactory();
$card1 = $f->create("日本太郎");
$card2 = $f->create("世界二郎");
$card3 = $f->create("地方野郎");

$card1->uses();
$card2->uses();
$card3->uses();