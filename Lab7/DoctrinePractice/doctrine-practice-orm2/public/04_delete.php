<?php
// File: public/04_delete.php
require __DIR__ . '/../bootstrap.php';

use App\Entity\BookEntity;

$repo = $em->getRepository(BookEntity::class);
$book = $repo->find(1);

if ($book) {
    $em->remove($book);  // queue the DELETE
    $em->flush();        // DELETE FROM books WHERE id = 1
    echo "Book deleted." . PHP_EOL;
} else {
    echo "Book not found." . PHP_EOL;
}
