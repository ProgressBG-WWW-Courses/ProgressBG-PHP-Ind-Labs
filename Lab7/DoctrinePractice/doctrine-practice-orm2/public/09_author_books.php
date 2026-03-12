<?php
// File: public/09_author_books.php
require __DIR__ . '/../bootstrap.php';

use App\Entity\AuthorEntity;

/** @var \App\Repository\AuthorRepository $repo */
$repo = $em->getRepository(AuthorEntity::class);

$authors = $repo->findWithBooks();

foreach ($authors as $author) {
    echo $author->getFirstName() . ' ' . $author->getLastName()
       . ' (' . $author->getBirthYear() . ', ' . $author->getNationality() . ')' . PHP_EOL;

    foreach ($author->getBooks() as $book) {
        echo '  - ' . $book->getTitle() . ' (' . $book->getYear() . ')' . PHP_EOL;
    }
}
