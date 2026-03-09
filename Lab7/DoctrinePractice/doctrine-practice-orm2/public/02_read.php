<?php
// File: public/02_read.php
require __DIR__ . '/../bootstrap.php';

use App\Entity\BookEntity;

// $repo = $em->getRepository("BookEntity");
$repo = $em->getRepository(BookEntity::class);

// Find by primary key — returns one BookEntity or null
$book = $repo->find(1);
if ($book) {
    echo $book->getTitle() . " by " . $book->getAuthor() . PHP_EOL;
    // Output: Deep Learning by Ian Goodfellow
} else {
    echo "Book with id=1 not found." . PHP_EOL;
}

// Find all available books, newest first
$available = $repo->findBy(['isAvailable' => true], ['year' => 'DESC']);
foreach ($available as $b) {
    echo $b->getYear() . ": " . $b->getTitle() . PHP_EOL;
}

// Find the first book matching a condition
$book = $repo->findOneBy(['author' => 'Ian Goodfellow']);
if ($book) {
    echo "Found: " . $book->getTitle() . PHP_EOL;
}
