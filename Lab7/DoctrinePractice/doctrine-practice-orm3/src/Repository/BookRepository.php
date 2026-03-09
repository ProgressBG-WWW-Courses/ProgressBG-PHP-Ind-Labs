<?php
// File: src/Repository/BookRepository.php
namespace App\Repository;

use Doctrine\ORM\EntityRepository;

class BookRepository extends EntityRepository
{
    /** Find all books by a given author, newest first. */
    public function findByAuthor(string $author): array
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.author = :author')
            ->setParameter('author', $author)
            ->orderBy('b.year', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /** Find all books currently on loan (not available). */
    public function findOnLoan(): array
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.isAvailable = false')
            ->orderBy('b.title', 'ASC')
            ->getQuery()
            ->getResult();
    }
}
