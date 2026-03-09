<?php
// File: public/05_query.php
require __DIR__ . '/../bootstrap.php';

use App\Entity\BookEntity;

$repo = $em->getRepository(BookEntity::class);

// Available books published after 2000, newest first, max 5 results
$books = $repo->createQueryBuilder('b')
    ->andWhere('b.isAvailable = :available')
    ->setParameter('available', true)
    ->andWhere('b.year > :since')
    ->setParameter('since', 2000)
    ->orderBy('b.year', 'DESC')
    ->setMaxResults(5)
    ->getQuery()
    ->getResult();

foreach ($books as $book) {
    echo $book->getYear() . ": " . $book->getTitle() . PHP_EOL;
}

// Count available books
$count = $repo->createQueryBuilder('b')
    ->select('COUNT(b.id)')
    ->andWhere('b.isAvailable = true')
    ->getQuery()
    ->getSingleScalarResult();

echo "Available books: $count" . PHP_EOL;
