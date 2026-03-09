<?php
// File: cli-config.php  (project root)
// Required by: php vendor/bin/doctrine orm:schema-tool:update --force

require_once __DIR__ . '/bootstrap.php';   // provides $em

use Doctrine\ORM\Tools\Console\ConsoleRunner;

return ConsoleRunner::createHelperSet($em);
