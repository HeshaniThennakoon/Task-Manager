<?php
include 'config/db.php';

$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$priority = $_POST['priority'];
$status = $_POST['status'];

$sql = "UPDATE tasks 
        SET title='$title',
            description='$description',
            priority='$priority',
            status='$status'
        WHERE id=$id";

$conn->query($sql);

header("Location: index.php");
