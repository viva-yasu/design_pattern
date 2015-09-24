<?php

namespace classes\idcard;

use classes\framework\Product;

class IDCard extends Product
{
    /** @var string $owner */
    private $owner;

    /**
     * IDCard constructor.
     * @param string $owner
     */
    public function __construct($owner)
    {
        echo $owner . "のカードを作ります。\n";
        $this->owner = $owner;
    }

    public function uses()
    {
        echo $this->owner . "のカードを使います。\n";
    }

    /**
     * @return string
     */
    public function getOwner()
    {
        return $this->owner;
    }
}