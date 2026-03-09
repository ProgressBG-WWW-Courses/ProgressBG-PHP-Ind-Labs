<?php
$isActive="`admin --"
createQueryBuilder('u')   // 'u' is an alias for UserEntity
    ->andWhere('u.isActive = $isActive')// No Protection against SQL Injection
    
    ->andWhere('u.isActive = :active')
    ->setParameter('active', $isActive)

    ->andWhere('u.createdAt > :since')
    ->setParameter('since', new \DateTime('2024-01-01'))
    
    ->orderBy('u.name', 'ASC')
    ->setMaxResults(20)                   // LIMIT 20
    ->setFirstResult(40)                  // OFFSET 40 (page 3 of 20)
    ->getQuery()
    ->getResult();         
    
    
// Trnaslation to SQL
select * from users u where u.is_active = '`admin --' and u.created_at > '2024-01-01' order by u.name asc limit 20 offset 40;