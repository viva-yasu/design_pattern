<?php

namespace classes\idcard;

use classes\framework\Factory;

class IDCardFactory extends Factory
{
    /** @var array $owners */
    private $owners = array();

    /**
     * @param string $owner
     * @return IDCard
     */
    protected function createProduct($owner)
    {
        return new IDCard($owner);
    }

    /**
     * @param IDCard $product
     */
    protected function registerProduct($product)
    {
        array_push($this->owners, $product->getOwner());
    }

    /**
     * @return array
     */
    public function getOwners()
    {
        return $this->owners;
    }
}