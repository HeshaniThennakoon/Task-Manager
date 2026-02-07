<?php
include 'config/db.php';

$title = $_POST['title'];
$description = $_POST['description'];
$priority = $_POST['priority'];
$status = $_POST['status'];
$due_date = $_POST['due_date'];

$sql = "INSERT INTO tasks (title, description, priority, status, due_date)
        VALUES ('$title', '$description', '$priority', '$status', '$due_date')";

$conn->query($sql);

header("Location: index.php");
