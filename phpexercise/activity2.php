<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Math</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="activity-container">
    <h2>Simple Math</h2>
    <?php
      $a = 8;
      $b = 4;
      echo "Sum: " . ($a + $b) . "<br>";
      echo "Difference: " . ($a - $b) . "<br>";
      echo "Product: " . ($a * $b) . "<br>";
      echo "Quotient: " . ($a / $b);
    ?>
    <a href="index.html" class="back-btn">⬅ Back to Home</a>
  </div>
</body>
</html>
