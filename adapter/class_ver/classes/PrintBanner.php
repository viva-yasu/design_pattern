<?php

namespace classes;

use interfaces\Show;

class PrintBanner extends Banner implements Show
{
    /**
     * PrintBanner constructor.
     */
    public function __construct($string)
    {
        parent::__construct($string);
    }

    public function printWeak()
    {
        $this->showWithParen();
    }

    public function printStrong()
    {
        $this->showWithAster();
    }
}