<?php
// File: public/03_update.php
require __DIR__ . '/../bootstrap.php';

use App\Entity\BookEntity;

$repo = $em->getRepository(BookEntity::class);
$book = $repo->find(1);  

if (!$book) {
    echo "Book with id=1 not found. Run 01_create.php first." . PHP_EOL;
    exit;
}

echo "Before: " . ($book->getYear()) . PHP_EOL;
$book->setYear(2024);           

$em->flush();   

echo "After: " . ($book->getYear()) . PHP_EOL;
