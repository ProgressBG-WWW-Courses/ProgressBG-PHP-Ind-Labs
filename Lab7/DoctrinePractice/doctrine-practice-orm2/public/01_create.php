<?php
// File: public/01_create.php
require __DIR__ . '/../bootstrap.php';   // provides $em

use App\Entity\BookEntity;
use App\Entity\AuthorEntity;

// Find or create the author
$author = $em->getRepository(AuthorEntity::class)->findOneBy(['lastName' => 'Goodfellow']);
if (!$author) {
    $author = new AuthorEntity();
    $author->setFirstName('Ian')
           ->setLastName('Goodfellow')
           ->setBirthYear(1986)
           ->setNationality('American');
    $em->persist($author);
}

$book = new BookEntity();
$book->setTitle('Deep Learning');
$book->setAuthor($author);
$book->setYear(2016);
$book->setIsAvailable(true);

$em->persist($book);
$em->flush();

echo "Saved with ID: " . $book->getId() . PHP_EOL;
