<?php
$conn = new mysqli("localhost", "root", "", "supreme");

if ($conn->connect_error) {
    die("Database connection failed");
}
