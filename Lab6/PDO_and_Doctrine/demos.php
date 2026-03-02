<?php

// Open connection (host, user, password, db)

$host = '127.0.0.1'; // Database host name, for local dev use localhost
$db   = 'labs_db'; // Database name
$user = 'admin'; // Database user. For security, use environment variables in real apps!
$pass = 'admin1234'; // Database password. For security, use environment variables in real apps!
$port = "3308"; // Database port
$charset = 'utf8mb4'; // Database charset

$dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";

try {
     $pdo = new PDO($dsn, $user, $pass);
     echo "Connected successfully to MariaDB!";
} catch (\PDOException $e) {
     echo "Connection failed: " . $e->getMessage();
}


// // Simple query — returns all rows as an array of associative arrays
// $rows = $pdo->query('SELECT * FROM users')->fetchAll(PDO::FETCH_ASSOC);

// foreach ($rows as $row) {
//     echo $row['id'] . ': ' . $row['username'] . PHP_EOL;
// }

try{
    $pdo->query(
        "CREATE TABLE orders (".
        "order_id INT AUTO_INCREMENT PRIMARY KEY,".
        "user_id INT NOT NULL, -- The column is named user_id here".
        "order_date DATETIME DEFAULT CURRENT_TIMESTAMP,".
        "total_amount DECIMAL(10, 2) NOT NULL,".
        "status ENUM('pending', 'shipped', 'delivered', 'cancelled') DEFAULT 'pending',".
        "shipping_address TEXT,".
        "-- Match the name defined above:".
        "FOREIGN KEY (user_id) REFERENCES users(id)"
    );
} catch (\PDOException $e) {
     echo "Connection failed: " . $e->getMessage();
}




// Send SQL query
