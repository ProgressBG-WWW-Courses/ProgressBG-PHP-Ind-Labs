<?php
// File: public/07_author_create.php
require __DIR__ . '/../bootstrap.php';

use App\Entity\AuthorEntity;

$authors = [
    ['Ian',    'Goodfellow', 1986, 'American'],
    ['Andrej', 'Karpathy',   1986, 'Slovak'],
    ['Donald', 'Knuth',      1938, 'American'],
];

foreach ($authors as [$first, $last, $year, $nat]) {
    $author = new AuthorEntity();
    $author->setFirstName($first)
           ->setLastName($last)
           ->setBirthYear($year)
           ->setNationality($nat);

    $em->persist($author);
    echo "Persisting: $first $last" . PHP_EOL;
}

$em->flush();
echo "All authors saved!" . PHP_EOL;
