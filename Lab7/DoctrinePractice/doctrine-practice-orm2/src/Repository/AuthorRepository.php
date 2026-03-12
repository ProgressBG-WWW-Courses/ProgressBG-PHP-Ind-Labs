<?php
// File: src/Repository/AuthorRepository.php
namespace App\Repository;

use Doctrine\ORM\EntityRepository;

class AuthorRepository extends EntityRepository
{
    /** Find all authors from a given country, ordered by last name. */
    public function findByNationality(string $nationality): array
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.nationality = :nationality')
            ->setParameter('nationality', $nationality)
            ->orderBy('a.lastName', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /** Find all authors and eagerly load their books (avoids N+1). */
    public function findWithBooks(): array
    {
        return $this->createQueryBuilder('a')
            ->addSelect('b')
            ->leftJoin('a.books', 'b')
            ->orderBy('a.lastName', 'ASC')
            ->getQuery()
            ->getResult();
    }
}
