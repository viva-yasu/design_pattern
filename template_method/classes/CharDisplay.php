<?php

namespace classes;

class CharDisplay extends AbstractDisplay
{
    private $ch;

    /**
     * CharDisplay constructor.
     * @param string $ch
     */
    public function __construct($ch)
    {
        $this->ch = $ch;
    }


    public function open()
    {
        echo "<<";
    }

    public function show()
    {
        echo $this->ch;
    }

    public function close()
    {
        echo ">>\n";
    }
}