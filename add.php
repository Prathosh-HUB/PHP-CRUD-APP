<?php include 'db.php'; ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $conn->query("INSERT INTO students (name, email) VALUES ('$name', '$email')");
    header("Location: index.php");
}
?>
<div class="form-container">
  <h2>Add Student</h2>
  <form method="post" class="student-form">
      <label for="name">Name:</label>
      <input type="text" name="name" id="name" required>

      <label for="email">Email:</label>
      <input type="email" name="email" id="email" required>

      <input type="submit" value="Add Student" class="btn submit-btn">
      <a href="index.php" class="btn back-btn">← Back to List</a>
  </form>
 
</div>


<style>
    h2 {
    display: block;
    width: fit-content;
    margin: 0 auto;
    padding: 10px 20px;
    background-color: #007BFF;
    color: white;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-weight: bold;
    font-size: 1.8rem;
    border-radius: 30px;
    text-align: center;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

   /* General form styling */
.student-form {
    max-width: 450px;
    margin: 50px auto;
    padding: 30px;
    background-color: #f9f9f9;
    border-radius: 12px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

/* Label styling */
.student-form label {
    display: block;
    margin-top: 15px;
    font-weight: 600;
    color: #333;
}

/* Input and textarea styling */
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

/* Focus effect */
.student-form input[type="text"]:focus,
.student-form input[type="email"]:focus,
.student-form textarea:focus {
    border-color: #007BFF;
    outline: none;
}

/* Submit button styling */
.submit-btn {
    margin-top: 20px;
    padding: 12px 22px;
    background-color: #007BFF;
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

/* Back button styling */
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


