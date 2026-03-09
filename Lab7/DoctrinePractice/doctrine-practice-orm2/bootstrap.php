<?php
// File: bootstrap.php  (project root)
// Doctrine ORM 2.x — uses PHPDoc @ORM\... annotations

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once __DIR__ . '/vendor/autoload.php';

// Tell Doctrine where your entity classes live
$config = Setup::createAnnotationMetadataConfiguration(
    [__DIR__ . '/src/Entity'],  // path(s) to entity folders
    true,                        // dev mode: re-reads annotations on every request
    null,                        // proxy directory (null = system temp folder)
    null,                        // cache (null = in-memory array cache)
    false                        // false = use full AnnotationReader (required for @ORM\...)
);

// Database connection — uses Docker MariaDB on port 3308
$conn = [
    'driver'   => 'pdo_mysql',
    'host'     => '127.0.0.1',
    'port'     => 3308,
    'dbname'   => 'doctrine_practice',
    'user'     => 'admin',
    'password' => 'admin1234',
    'charset'  => 'utf8mb4',
];

// $em is the single entry point for all database operations
$em = EntityManager::create($conn, $config);
