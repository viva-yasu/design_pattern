<?php
require 'classes/ItemPrototype.php';
require 'classes/ItemManager.php';
require 'classes/DeepCopyItem.php';
require 'classes/ShallowCopyItem.php';

use prototype\classes\DeepCopyItem;
use prototype\classes\ItemManager;
use prototype\classes\ShallowCopyItem;

function copyItem(ItemManager $manager, $code)
{
    $item1 = $manager->create($code);
    $item2 = $manager->create($code);

    $item2->getDetail()->comment = '書き換え';

    $item1->printData();
    $item2->printData();
}

$manager = new ItemManager();

$item = new DeepCopyItem('AB001', 'アイテム1', 1000);
$detail = new stdClass();
$detail->comment = 'アイテム1のコメント';
$item->setDetail($detail);
$manager->registerItem($item);

$item = new ShallowCopyItem('AC002', 'アイテム2', 2000);
$detail = new stdClass();
$detail->comment = 'アイテム2のコメント';
$item->setDetail($detail);
$manager->registerItem($item);

copyItem($manager, 'AB001');
copyItem($manager, 'AC002');
