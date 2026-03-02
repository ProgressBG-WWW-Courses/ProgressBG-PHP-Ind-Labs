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


try{
    $pdo->query(
        "CREATE TABLE orders (".
          "order_id INT AUTO_INCREMENT PRIMARY KEY,".
          "user_id INT NOT NULL,".
          "order_date DATETIME DEFAULT CURRENT_TIMESTAMP,".
          "total_amount DECIMAL(10, 2) NOT NULL,".
          "status ENUM('pending', 'shipped', 'delivered', 'cancelled') DEFAULT 'pending',".
          "shipping_address TEXT,".        
          "FOREIGN KEY (user_id) REFERENCES users(id)".
        ");"
    );
} catch (\PDOException $e) {
     echo "PDO Errorr: " . $e->getMessage();
}