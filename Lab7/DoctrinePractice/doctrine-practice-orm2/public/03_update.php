<?php
// File: public/03_update.php
require __DIR__ . '/../bootstrap.php';

use App\Entity\BookEntity;

$repo = $em->getRepository(BookEntity::class);
$book = $repo->find(1);   // Doctrine loads and starts tracking this entity

if (!$book) {
    echo "Book with id=1 not found. Run 01_create.php first." . PHP_EOL;
    exit;
}

echo "Before: " . ($book->isAvailable() ? 'available' : 'not available') . PHP_EOL;

$book->setIsAvailable(false);   // Doctrine detects the change automatically

// No persist() needed — already tracked. flush() generates the UPDATE.
$em->flush();   // UPDATE books SET is_available = 0 WHERE id = 1

echo "After: " . ($book->isAvailable() ? 'available' : 'not available') . PHP_EOL;
