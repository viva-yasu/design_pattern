<?php

namespace classes;

class StringDisplay extends AbstractDisplay
{
    /** @var string $string */
    private $string;

    /** @var int $len */
    private $len;

    /**
     * StringDisplay constructor.
     * @param string $string
     */
    public function __construct($string)
    {
        $this->string = $string;
        $this->len = mb_strwidth($string, 'UTF-8');
    }


    public function open()
    {
        $this->printLine();
    }

    public function show()
    {
        echo '|' . $this->string . "|\n";
    }

    public function close()
    {
        $this->printLine();
    }

    private function printLine()
    {
        echo '+';
        for ($i = 0; $i < $this->len; $i++) {
            echo '-';
        }
        echo "+\n";
    }
}