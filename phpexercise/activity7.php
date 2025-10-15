<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BMI Calculator</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="activity-container">
    <h2>BMI Calculator</h2>

    <form method="POST" action="">
      Weight (kg): <input type="number" step="0.1" name="weight" required><br><br>
      Height (m): <input type="number" step="0.01" name="height" required><br><br>
      <input type="submit" value="Compute BMI">
    </form>

    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $weight = $_POST["weight"];
        $height = $_POST["height"];
        $bmi = $weight / ($height * $height);
        echo "Your BMI is: " . number_format($bmi, 2);
      }
    ?>

    <a href="index.html" class="back-btn">⬅ Back to Home</a>
  </div>
</body>
</html>
