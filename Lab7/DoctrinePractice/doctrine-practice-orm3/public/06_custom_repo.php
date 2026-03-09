<?php
// File: public/06_custom_repo.php
require __DIR__ . '/../bootstrap.php';

use App\Entity\BookEntity;

// getRepository() now returns a BookRepository instance
$repo = $em->getRepository(BookEntity::class);

$goodfellowBooks = $repo->findByAuthor('Ian Goodfellow');
$onLoan          = $repo->findOnLoan();

echo "=== Books by Ian Goodfellow ===" . PHP_EOL;
foreach ($goodfellowBooks as $book) {
    echo $book->getTitle() . PHP_EOL;
}

echo "=== Books on loan ===" . PHP_EOL;
foreach ($onLoan as $book) {
    echo $book->getTitle() . " (not available)" . PHP_EOL;
}
