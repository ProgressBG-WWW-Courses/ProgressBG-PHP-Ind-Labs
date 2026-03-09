#!/usr/bin/env php
<?php
// File: doctrine.php  (project root)
// Doctrine ORM 3.x CLI entry point
// Usage: php doctrine.php orm:schema-tool:update --dump-sql
//        php doctrine.php orm:schema-tool:update --force

require_once __DIR__ . '/bootstrap.php';  // provides $em

use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\Tools\Console\EntityManagerProvider\SingleManagerProvider;

ConsoleRunner::run(new SingleManagerProvider($em));
