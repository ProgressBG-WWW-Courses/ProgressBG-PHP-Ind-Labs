<?php

$exp_time = time() + 2*60;

if (isset($_GET['color'])) {
    $color = $_GET['color'];
    setcookie("color_test", $color, $exp_time, "/"); // cookie expires in 2 minutes
} else {
    echo "No data submitted yet.";
}

echo  "exp_time=$exp_time<br/>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./script.js"></script>
</head>
<body>
    <form action="" method="get">
        <label>Select background color: <input name="color" id="color" type="color"></label>
        <button id="submit" type="submit">Set Background Color</button>        
    </form>
</body>
</html>

