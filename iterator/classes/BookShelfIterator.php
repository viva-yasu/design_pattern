<?php

namespace classes;

use interfaces\Iterator;

class BookShelfIterator implements Iterator
{
    /**
     * @var BookShelf
     */
    private $bookShelf;

    /**
     * @var int
     */
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
     * @return Object
     */
    public function next()
    {
        /**
         * @var Book $book
         */
        $book = $this->bookShelf->getBookAt($this->index);
        $this->index++;

        return $book;
    }
}