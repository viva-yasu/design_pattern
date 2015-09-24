<?php

namespace prototype\classes;

use stdClass;

abstract class ItemPrototype
{
    private $code;
    private $name;
    private $price;
    private $detail;

    public function __construct($code, $name, $price)
    {
        $this->code = $code;
        $this->name = $name;
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * @param stdClass $detail
     */
    public function setDetail(stdClass $detail)
    {
        $this->detail = $detail;
    }

    public function printData()
    {
        echo $this->getName() . "\n";
        echo $this->getCode() . "\n";
        echo number_format($this->getPrice()) . "\n";
        echo $this->detail->comment . "\n";
    }

    public function newInstance()
    {
        $new_instance = clone $this;
        return $new_instance;
    }

    protected abstract function __clone();
}
