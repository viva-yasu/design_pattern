<?php

namespace classes\framework;


abstract class Factory
{
    /**
     * @param string $owner
     * @return Product
     */
    public final function create($owner)
    {
        /** @var Product $p */
        $p = $this->createProduct($owner);
        $this->registerProduct($p);
        return $p;
    }

    /**
     * @param string $owner
     * @return Product
     */
    protected abstract function createProduct($owner);

    /**
     * @param Product $product
     */
    protected abstract function registerProduct($product);
}