<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Travel Cost Estimator</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="activity-container">
    <h2>Travel Cost Estimator</h2>
    <?php
      $distance = 150;
      $fuel_consumption = 15;
      $fuel_price = 65;

      $cost = ($distance / $fuel_consumption) * $fuel_price;

      echo "Estimated Travel Cost: ₱$cost";
    ?>
    <a href="index.html" class="back-btn">⬅ Back to Home</a>
  </div>
</body>
</html>
