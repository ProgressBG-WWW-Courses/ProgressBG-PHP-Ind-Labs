<?php
// File: bootstrap.php  (project root)
// NOTE: Adapted for Doctrine ORM 3.x which uses PHP 8 attributes instead of annotations

use Doctrine\ORM\ORMSetup;
use Doctrine\ORM\EntityManager;
use Doctrine\DBAL\DriverManager;

require_once __DIR__ . '/vendor/autoload.php';

// Tell Doctrine where your entity classes live and use PHP 8 attribute mapping
$config = ORMSetup::createAttributeMetadataConfiguration(
    paths: [__DIR__ . '/src'],   // path(s) to entity folders
    isDevMode: true,             // dev mode: re-reads metadata on every request
);

// Database connection — uses Docker MariaDB on port 3308
$connParams = [
    'driver'   => 'pdo_mysql',
    'host'     => '127.0.0.1',
    'port'     => 3308,
    'dbname'   => 'doctrine_practice',
    'user'     => 'admin',
    'password' => 'admin1234',
    'charset'  => 'utf8mb4',
];

$connection = DriverManager::getConnection($connParams, $config);

// $em is the single entry point for all database operations
$em = new EntityManager($connection, $config);
