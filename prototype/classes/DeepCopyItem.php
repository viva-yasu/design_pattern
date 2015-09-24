<?php

namespace prototype\classes;

class DeepCopyItem extends ItemPrototype
{
    protected function __clone()
    {
        $this->setDetail(clone $this->getDetail());
    }
}