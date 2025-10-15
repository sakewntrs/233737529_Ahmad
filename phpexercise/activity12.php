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

    <form method="POST" action="">
      Distance (km): <input type="number" name="distance" required><br><br>
      Fuel Efficiency (km/L): <input type="number" name="fuel" required><br><br>
      Fuel Price per Liter (₱): <input type="number" name="price" required><br><br>
      <input type="submit" value="Estimate Cost">
    </form>

    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $distance = $_POST["distance"];
        $fuel = $_POST["fuel"];
        $price = $_POST["price"];
        $cost = ($distance / $fuel) * $price;
        echo "Estimated Travel Cost: ₱" . number_format($cost, 2);
      }
    ?>

    <a href="index.html" class="back-btn">⬅ Back to Home</a>
  </div>
</body>
</html>
