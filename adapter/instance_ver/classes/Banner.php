<?php

namespace classes;

class Banner
{
    /** @var string $string */
    private $string;

    /**
     * Banner constructor.
     * @param string $string
     */
    public function __construct($string)
    {
        $this->string = $string;
    }

    /**
     * カッコで括って出力する
     */
    public function showWithParen()
    {
        echo "(" . $this->string . ") \n";
    }

    /**
     * アステリスクで囲って出力する
     */
    public function showWithAster()
    {
        echo "*" . $this->string . "* \n";
    }
}
