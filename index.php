<?php
include "db.php";

$result = mysqli_query($conn, "SELECT * FROM tasks ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>To-Do List</title>
</head>

<body>

<h1>My To-Do List</h1>

<form action="add.php" method="POST">
    <input type="text" name="task" placeholder="Enter your task" required>
    <button type="submit">Add Task</button>
</form>

<hr>

<?php while ($row = mysqli_fetch_assoc($result)) { ?>

    <p>
        <?php echo htmlspecialchars($row['task']); ?>

        <a href="delete.php?id=<?php echo $row['id']; ?>">
            Delete
        </a>
    </p>

<?php } ?>

</body>
</html>