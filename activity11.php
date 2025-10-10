<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Currency Converter</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="activity-container">
    <h2>Currency Converter</h2>
    <?php
      $php = 1000;
      $usd_rate = 0.018;
      $eur_rate = 0.017;
      $jpy_rate = 2.65;

      echo "PHP $php = USD " . ($php * $usd_rate) . "<br>";
      echo "PHP $php = EUR " . ($php * $eur_rate) . "<br>";
      echo "PHP $php = JPY " . ($php * $jpy_rate);
    ?>
    <a href="index.html" class="back-btn">⬅ Back to Home</a>
  </div>
</body>
</html>
