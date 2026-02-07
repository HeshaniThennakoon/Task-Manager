<?php
include 'config/db.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM tasks WHERE id=$id");
$task = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<h2>Edit Task</h2>

<form action="update-task.php" method="POST">

    <input type="hidden" name="id" value="<?= $task['id'] ?>">

    <label>Task Title</label>
    <input type="text" name="title" value="<?= $task['title'] ?>" required>

    <label>Description</label>
    <textarea name="description"><?= $task['description'] ?></textarea>

    <label>Priority</label>
    <select name="priority">
        <option <?= $task['priority']=="Low"?"selected":"" ?>>Low</option>
        <option <?= $task['priority']=="Medium"?"selected":"" ?>>Medium</option>
        <option <?= $task['priority']=="High"?"selected":"" ?>>High</option>
    </select>

    <label>Status</label>
    <select name="status">
        <option <?= $task['status']=="Pending"?"selected":"" ?>>Pending</option>
        <option <?= $task['status']=="In Progress"?"selected":"" ?>>In Progress</option>
        <option <?= $task['status']=="Completed"?"selected":"" ?>>Completed</option>
    </select>

    <button type="submit">Update Task</button>
</form>

</body>
</html>
