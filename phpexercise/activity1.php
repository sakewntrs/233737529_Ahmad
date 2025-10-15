<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Introduce Yourself</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="activity-container">
    <h2>Introduce Yourself</h2>

    <form method="POST" action="">
      <label>Name:</label><br>
      <input type="text" name="name" required><br><br>

      <label>Age:</label><br>
      <input type="number" name="age" required><br><br>

      <label>Favorite Color:</label><br>
      <input type="text" name="color" required><br><br>

      <input type="submit" value="Submit">
    </form>

    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $age = $_POST["age"];
        $color = $_POST["color"];

        echo "<p>Hello, I am $name, I am $age years old, and my favorite color is $color.</p>";
      }
    ?>

    <a href="index.html" class="back-btn">⬅ Back to Home</a>
  </div>
</body>
</html>
