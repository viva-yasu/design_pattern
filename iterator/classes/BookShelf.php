<?php

namespace classes;

use interfaces\Aggregate;
use interfaces\Iterator;

class BookShelf implements Aggregate
{
    /** @var array $books book collection */
    private $books;

    /**
     * BookShelf constructor.
     */
    public function __construct()
    {
        $this->books = array();
    }

    /**
     * get book in bookShelf at index
     *
     * @param int $index
     * @return Book
     */
    public function getBookAt($index)
    {
        return $this->books[$index];
    }

    /**
     * add Book to book collection
     *
     * @param Book $book
     */
    public function appendBook($book)
    {
        array_push($this->books, $book);
    }

    /**
     * get book collection size
     *
     * @return int
     */
    public function getLength()
    {
        return count($this->books);
    }

    /**
     * make Book collection Iterator
     *
     * @return Iterator
     */
    public function iterator()
    {
        return new BookShelfIterator($this);
    }

    /**
     * make Reverse Iterator
     *
     * @return Iterator
     */
    public function reverseIterator()
    {
        return new BookShelfReverseIterator($this);
    }
}