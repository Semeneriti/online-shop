<?php
$pdo = new PDO("pgsql:host=postgres_db;dbname=mydb;user=semen;password=ae-4710554");
if ($pdo) {
    echo "Connected to PostgreSQL successfully!";
} else {
    echo "Connection failed.";
}
?>
