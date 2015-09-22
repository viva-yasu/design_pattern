<?php

namespace classes;

use interfaces\Iterator;

class BookShelfReverseIterator implements Iterator
{
    /** @var BookShelf $bookShelf */
    private $bookShelf;

    /** @var int $index */
    private $index;

    /**
     * BookShelfReverseIterator constructor.
     * @param BookShelf $bookShelf
     */
    public function __construct(BookShelf $bookShelf)
    {
        $this->bookShelf = $bookShelf;
        $this->index = ($this->bookShelf->getLength() - 1);
    }

    /**
     * @return bool
     */
    public function hasNext()
    {
        if ($this->index >= 0) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @return Object
     */
    public function next()
    {
        $book = $this->bookShelf->getBookAt($this->index);
        $this->index--;

        return $book;
    }
}