<?php

namespace classes;

use interfaces\Iterator;

class BookShelfIterator implements Iterator
{
    /** @var BookShelf $bookShelf*/
    private $bookShelf;

    /** @var int $index */
    private $index;

    /**
     * BookShelfIterator constructor.
     * @param BookShelf $bookShelf
     */
    public function __construct(BookShelf $bookShelf)
    {
        $this->bookShelf = $bookShelf;
        $this->index = 0;
    }

    /**
     * check book collection at next index
     *
     * @return bool
     */
    public function hasNext()
    {
        if ($this->index < $this->bookShelf->getLength()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * get book at current index
     *
     * @return Object
     */
    public function next()
    {
        /** @var Book $book */
        $book = $this->bookShelf->getBookAt($this->index);
        $this->index++;

        return $book;
    }
}