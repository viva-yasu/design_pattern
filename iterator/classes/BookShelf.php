<?php

namespace classes;

use interfaces\Aggregate;
use interfaces\Iterator;

class BookShelf implements Aggregate
{
    /**
     * @var Array
     */
    private $books;

    /**
     * BookShelf constructor.
     */
    public function __construct()
    {
        $this->books = array();
    }

    /**
     * get book at index
     *
     * @param int $index
     * @return Book
     */
    public function getBookAt($index)
    {
        return $this->books[$index];
    }

    /**
     * add Book to book array
     *
     * @param Book $book
     */
    public function appendBook($book)
    {
        array_push($this->books, $book);
    }

    /**
     * @return int
     */
    public function getLength()
    {
        return count($this->books);
    }

    /**
     * @return Iterator
     */
    public function iterator()
    {
        return new BookShelfIterator($this);
    }
}