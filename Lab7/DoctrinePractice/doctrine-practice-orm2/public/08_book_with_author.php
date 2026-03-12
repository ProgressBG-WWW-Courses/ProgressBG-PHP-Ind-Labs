<?php
// File: public/08_book_with_author.php
require __DIR__ . '/../bootstrap.php';

use App\Entity\AuthorEntity;
use App\Entity\BookEntity;

// Load authors by ID (adjust IDs if needed)
$goodfellow = $em->getRepository(AuthorEntity::class)->find(1);
$knuth      = $em->getRepository(AuthorEntity::class)->find(3);

if (!$goodfellow || !$knuth) {
    echo "Authors not found. Run 07_author_create.php first." . PHP_EOL;
    exit(1);
}

$book1 = new BookEntity();
$book1->setTitle('Deep Learning')
      ->setAuthor($goodfellow)
      ->setYear(2016)
      ->setIsAvailable(true);

$book2 = new BookEntity();
$book2->setTitle('The Art of Computer Programming')
      ->setAuthor($knuth)
      ->setYear(1968)
      ->setIsAvailable(true);

$em->persist($book1);
$em->persist($book2);
$em->flush();

echo "Saved: '{$book1->getTitle()}' by {$goodfellow->getFirstName()} {$goodfellow->getLastName()} (ID: {$book1->getId()})" . PHP_EOL;
echo "Saved: '{$book2->getTitle()}' by {$knuth->getFirstName()} {$knuth->getLastName()} (ID: {$book2->getId()})" . PHP_EOL;
