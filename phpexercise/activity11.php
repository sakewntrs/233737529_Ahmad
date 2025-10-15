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

    <form method="POST" action="">
      Amount in PHP: <input type="number" name="php" required><br><br>
      <input type="submit" value="Convert">
    </form>

    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $php = $_POST["php"];
        $usd_rate = 0.018;
        $eur_rate = 0.017;
        $jpy_rate = 2.65;

        echo "PHP $php = USD " . number_format($php * $usd_rate, 2) . "<br>";
        echo "PHP $php = EUR " . number_format($php * $eur_rate, 2) . "<br>";
        echo "PHP $php = JPY " . number_format($php * $jpy_rate, 2);
      }
    ?>

    <a href="index.html" class="back-btn">⬅ Back to Home</a>
  </div>
</body>
</html>
