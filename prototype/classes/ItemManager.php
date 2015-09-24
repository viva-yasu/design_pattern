<?php

namespace prototype\classes;

class ItemManager
{

    private $items;

    /**
     * ItemManager constructor.
     */
    public function __construct()
    {
        $this->items = array();
    }

    public function registerItem(ItemPrototype $item)
    {
        $this->items[$item->getCode()] = $item;
    }

    public function create($item_code)
    {
        /** @var ItemPrototype $item */
        $item = $this->items[$item_code];
        $cloned = $item->newInstance();
        return $cloned;
    }
}
