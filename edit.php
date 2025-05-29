<?php include 'db.php'; ?>
<?php
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM students WHERE id=$id");
$row = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $conn->query("UPDATE students SET name='$name', email='$email' WHERE id=$id");
    header("Location: index.php");
}
?>
<h2>Edit Student</h2>
<form method="post" class="student-form">
    <input type="hidden" name="id" value="<?= htmlspecialchars($row['id']); ?>">
    
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="<?= htmlspecialchars($row['name']); ?>" required>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="<?= htmlspecialchars($row['email']); ?>" required>

    <input type="submit" value="Update Student" class="btn submit-btn">
    
<a href="index.php" class="btn back-btn">← Back to List</a>
</form>



<style>
    /* Heading Styling */
h2 {
    display: inline-block;
    padding: 12px 20px;
    background-color:rgb(49, 224, 26); /* Blue background */
    color: white;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-weight: bold;
    font-size: 1.8rem;
    border-radius: 30px;
    text-align: center;
    margin: 0 auto;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

/* General Form Styling */
.student-form {
    max-width: 450px;
    margin: 50px auto;
    padding: 30px;
    background-color: #f9f9f9;
    border-radius: 12px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

/* Label Styling */
.student-form label {
    display: block;
    margin-top: 15px;
    font-weight: 600;
    color: #333;
}

/* Input and Textarea Styling */
.student-form input[type="text"],
.student-form input[type="email"],
.student-form textarea {
    width: 100%;
    padding: 12px 16px;
    margin-top: 6px;
    border: 1.5px solid #ccc;
    border-radius: 10px;
    font-size: 16px;
    box-sizing: border-box;
    transition: border-color 0.3s ease;
}

/* Focus Effect */
.student-form input[type="text"]:focus,
.student-form input[type="email"]:focus,
.student-form textarea:focus {
    border-color: #007BFF;
    outline: none;
}

/* Submit Button Styling */
.submit-btn {
    margin-top: 20px;
    padding: 12px 22px;
    background-color:rgb(8, 239, 93);
    color: white;
    font-weight: 600;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
}

.submit-btn:hover {
    background-color: #0056b3;
}

/* Back Button Styling */
.back-btn {
    display: inline-block;
    margin-top: 15px;
    background-color: #6c757d;
    color: white;
    padding: 12px 22px;
    border-radius: 6px;
    text-decoration: none;
    font-weight: 600;
    transition: background-color 0.3s ease;
}

.back-btn:hover {
    background-color: #545b62;
}

</style>