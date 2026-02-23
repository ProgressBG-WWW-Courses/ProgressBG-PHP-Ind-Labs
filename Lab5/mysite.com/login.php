<?php 

// $_get = [
//     "user" => "admin",
//     "pass" => "1234"
// ];


foreach ($_GET as $key => $value) {
    echo "$key: $value <br>";
}

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "admin" && $password == "admin") {
    echo "Login successful!";
} else {
    echo "Invalid username or password.";
}

?>