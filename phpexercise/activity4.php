<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Temperature Converter</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="activity-container">
    <h2>Temperature Converter</h2>

    <form method="POST" action="">
      Celsius: <input type="number" name="celsius" required><br><br>
      <input type="submit" value="Convert">
    </form>

    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $celsius = $_POST["celsius"];
        $fahrenheit = ($celsius * 9/5) + 32;
        echo "{$celsius}°C = {$fahrenheit}°F";
      }
    ?>

    <a href="index.html" class="back-btn">⬅ Back to Home</a>
  </div>
</body>
</html>
