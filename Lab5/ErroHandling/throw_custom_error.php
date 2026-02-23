<?php

function registerUser(string $username, string $password) {
    if (strlen($password) < 8) {
        // Stop execution here and throw an error back to the caller
        throw new Exception("Password must be at least 8 characters long.");
    }
    
    echo "User $username registered successfully!";
}

try {
    registerUser("john_doe", "123");
} catch (Exception $e) {
    echo "Registration failed: " . $e->getMessage();
}