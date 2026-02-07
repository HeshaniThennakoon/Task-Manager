<?php include 'config/db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Task Manager</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<h2>Task List</h2>
<a href="add-task.php">➕ Add New Task</a>

<table>
    <tr>
        <th>Title</th>
        <th>Priority</th>
        <th>Status</th>
        <th>Created Date</th>
        <th>Actions</th>
    </tr>

<?php
$result = $conn->query("SELECT * FROM tasks ORDER BY created_at DESC");

while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row['title']}</td>
            <td>{$row['priority']}</td>
            <td>{$row['status']}</td>
            <td>{$row['created_at']}</td>
            <td>
                <a href='edit-task.php?id={$row['id']}'>✏️ Edit</a>
                <a href='delete-task.php?id={$row['id']}' 
                    onclick='return confirm(\"Are you sure?\")'>🗑️ Delete</a>
            <td>
          </tr>";
}
?>
</table>

</body>
</html>
