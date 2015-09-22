<?php

namespace classes;

class PrintBanner extends Show
{
    /** @var Banner $banner */
    private $banner;

    /**
     * PrintBanner constructor.
     * @param string $banner
     */
    public function __construct($string)
    {
        $this->banner = new Banner($string);
    }

    public function printWeak()
    {
        $this->banner->showWithParen();
    }

    public function printStrong()
    {
        $this->banner->showWithAster();
    }
}