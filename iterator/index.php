<?php

require 'interfaces/Aggregate.php';
require 'interfaces/Iterator.php';
require 'classes/Book.php';
require 'classes/BookShelf.php';
require 'classes/BookShelfIterator.php';

use classes\Book;
use classes\BookShelf;

$bookShelf = new BookShelf();
$bookShelf->appendBook(new Book('perfect php'));
$bookShelf->appendBook(new Book('perfect ruby'));
$bookShelf->appendBook(new Book('perfect java'));
$bookShelf->appendBook(new Book('perfect c++'));
$bookShelf->appendBook(new Book('perfect rails'));
$iterator = $bookShelf->iterator();

while ($iterator->hasNext()) {
    /**
     * @var Book $book
     */
    $book = $iterator->next();
    echo $book->getName() . "\n";
}
