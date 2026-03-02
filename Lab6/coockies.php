<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="script.js"></script>
</head>
<body>
    <form action="" method="get">
        <label>Select background color: <input name="color" id="color" type="color"></label>
        <button id="submit" type="submit">Set Background Color</button>        
    </form>
</body>
</html>

<?php
if (!empty($_GET)) {
    foreach ($_GET as $key => $value) {
        // htmlspecialchars prevents XSS when echoing user input
        echo "key=" . htmlspecialchars($key) . ", value=" . htmlspecialchars($value) . "<br/>";
    }
} else {
    echo "No data submitted yet.<br>";
}


var_dump($_GET);
