<?php

namespace classes;

abstract class AbstractDisplay
{
    public abstract function open();

    public abstract function show();

    public abstract function close();

    public final function display()
    {
        $this->open();
        for ($i = 0; $i < 5; $i++) {
            $this->show();
        }
        $this->close();
    }
}
