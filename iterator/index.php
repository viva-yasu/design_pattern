<?php

require 'interfaces/Aggregate.php';
require 'interfaces/Iterator.php';
require 'classes/Book.php';
require 'classes/BookShelf.php';
require 'classes/BookShelfIterator.php';
require 'classes/BookShelfReverseIterator.php';

use classes\Book;
use classes\BookShelf;
use classes\BookShelfIterator;
use classes\BookShelfReverseIterator;

$bookShelf = new BookShelf();
$bookShelf->appendBook(new Book('perfect php'));
$bookShelf->appendBook(new Book('perfect ruby'));
$bookShelf->appendBook(new Book('perfect java'));
$bookShelf->appendBook(new Book('perfect c++'));
$bookShelf->appendBook(new Book('perfect rails'));

/** @var BookShelfIterator $iterator */
$iterator = $bookShelf->iterator();

/** @var BookShelfReverseIterator $reverseIterator */
$reverseIterator = $bookShelf->reverseIterator();

echo "-------  Order -------\n";
while ($iterator->hasNext()) {
    /** @var Book $book */
    $book = $iterator->next();
    echo $book->getName() . "\n";
}
echo "------- Reverse Order -------\n";
while ($reverseIterator->hasNext()) {
    /** @var Book $book */
    $book = $reverseIterator->next();
    echo $book->getName() . "\n";
}
