<?php
$connection = new mysqli('localhost', 'root', '', 'pickme');

if ($connection->connect_error) {
    die('Database connection failed: ' . $connection->connect_error);
}

echo 'Database connected successfully!';

