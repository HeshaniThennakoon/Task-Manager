<!DOCTYPE html>
<html>
<head>
    <title>Add Task</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<h2>Add New Task</h2>

<form action="save-task.php" method="POST" onsubmit="return validateForm()">

    <label>Task Title *</label>
    <input type="text" name="title" id="title">

    <label>Description</label>
    <textarea name="description"></textarea>

    <label>Priority</label>
    <select name="priority">
        <option>Low</option>
        <option>Medium</option>
        <option>High</option>
    </select>

    <label>Status</label>
    <select name="status">
        <option>Pending</option>
        <option>In Progress</option>
        <option>Completed</option>
    </select>

    <label>Due Date</label>
    <input type="date" name="due_date">

    <button type="submit">Save Task</button>
</form>

<script>
function validateForm() {
    if (document.getElementById("title").value.trim() === "") {
        alert("Task title is required!");
        return false;
    }
    return true;
}
</script>

</body>
</html>
