<?php

namespace interfaces;

interface Iterator
{
    /**
     * @return bool
     */
    public function hasNext();

    /**
     * @return Object
     */
    public function next();
}