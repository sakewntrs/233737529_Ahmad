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
    <?php
      $weight = 60;
      $height = 1.7;
      $bmi = $weight / ($height * $height);
      echo "Your BMI is: $bmi";
    ?>
    <a href="index.html" class="back-btn">⬅ Back to Home</a>
  </div>
</body>
</html>
