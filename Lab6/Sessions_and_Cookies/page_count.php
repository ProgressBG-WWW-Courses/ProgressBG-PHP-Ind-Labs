<?php

session_start();

if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 1; // executed only on the first visit to the page
}


echo "count: $_SESSION[count]\n";

$_SESSION['count']++;

