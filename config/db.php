<?php
$conn = new mysqli("localhost", "root", "", "task_manager", 3307);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
