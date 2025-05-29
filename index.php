<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Management</title>
    <link rel="stylesheet" href="style.css">
     <!-- <link rel="stylesheet" href="assets/style.css"> -->

</head>
<h2 >Student List</h2>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque minima tenetur laudantium nihil. Illo vitae possimus odio sint tenetur aliquid!</p>

<button class="btn add-btn" onclick="location.href='add.php'">+ Add Student</button><br>
<br>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    
    
    <?php
    $result = $conn->query("SELECT * FROM students");
    $num=1;
    while ($row = $result->fetch_assoc()):
     ?>

    <tr>
        <td><?php echo $num++  ?></td>
        <td><?= $row['name']; ?></td>
        <td><?= $row['email']; ?></td>
        
        <td>
        <a href="edit.php?id=<?= $row['id']; ?>" class="btn edit">Edit</a>
        <a href="delete.php?id=<?= $row['id']; ?>" class="btn delete" onclick="return confirm('Delete?')">Delete</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>
</body>
</html>
