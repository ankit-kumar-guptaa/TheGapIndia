<?php
// Database Configuration
$host = 'localhost';
$dbname = 'u634223065_gapindia_db'; // Change this if your database name is different
$username = 'u634223065_admin';      // Change this to your database username
$password = 'Admin@000@';          // Change this to your database password
// $host = 'localhost';
// $dbname = 'gapindia_db'; // Change this if your database name is different
// $username = 'root';      // Change this to your database username
// $password = '';          // Change this to your database password

try {
    $pdo = new PDO("mysql:host=$host;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Create Database if it doesn't exist
    $pdo->exec("CREATE DATABASE IF NOT EXISTS `$dbname`");
    $pdo->exec("USE `$dbname`");

    // Create Tables Automatically
    
    // 1. Admin Users Table
    $pdo->exec("CREATE TABLE IF NOT EXISTS admins (
        `id` INT AUTO_INCREMENT PRIMARY KEY,
        `username` VARCHAR(50) NOT NULL UNIQUE,
        `password` VARCHAR(255) NOT NULL,
        `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )");

    // Create default admin if not exists (admin / admin123)
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM admins WHERE username = 'admin'");
    $stmt->execute();
    if ($stmt->fetchColumn() == 0) {
        $default_pass = password_hash('admin123', PASSWORD_DEFAULT);
        $pdo->exec("INSERT INTO admins (username, password) VALUES ('admin', '$default_pass')");
    }

    // 2. Hire Talent Requests
    $pdo->exec("CREATE TABLE IF NOT EXISTS hire_requests (
        `id` INT AUTO_INCREMENT PRIMARY KEY,
        `company_name` VARCHAR(100),
        `contact_person` VARCHAR(100),
        `email` VARCHAR(100),
        `phone` VARCHAR(20),
        `industry` VARCHAR(50),
        `role_description` TEXT,
        `status` ENUM('new', 'contacted', 'closed') DEFAULT 'new',
        `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )");

    // 3. CV Submissions
    $pdo->exec("CREATE TABLE IF NOT EXISTS cv_submissions (
        `id` INT AUTO_INCREMENT PRIMARY KEY,
        `full_name` VARCHAR(100),
        `mobile` VARCHAR(20),
        `email` VARCHAR(100),
        `current_role` VARCHAR(100),
        `file_path` VARCHAR(255),
        `status` ENUM('new', 'reviewed', 'shortlisted', 'rejected') DEFAULT 'new',
        `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )");

    // 4. Contact Queries
    $pdo->exec("CREATE TABLE IF NOT EXISTS contact_queries (
        `id` INT AUTO_INCREMENT PRIMARY KEY,
        `name` VARCHAR(100),
        `email` VARCHAR(100),
        `phone` VARCHAR(20),
        `subject` VARCHAR(100),
        `message` TEXT,
        `status` ENUM('new', 'replied') DEFAULT 'new',
        `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )");

} catch (PDOException $e) {
    die("Database Connection Failed: " . $e->getMessage());
}
?>