<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    <h1>My test page</h1>
    <form action="tmp.php" method="get">
        <label>user name: <input type="text" name="username"></label>
        <label>user pass: <input type="password" name="password"></label>
        <button type="submit">Login</button>
    </form>
</body>
</html>

<?php
    error_reporting(0);
    ini_set('display_errors', 0);

    $count = 1;

    echo "Hello World! $count";
    echo "<br>";
    foreach ($_GET as $key => $value) {
        echo "$key: $value<br>";
    }
?>
