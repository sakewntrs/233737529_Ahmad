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

    <form method="POST" action="">
      <label>Enter first number:</label><br>
      <input type="number" name="num1" required><br><br>

      <label>Enter second number:</label><br>
      <input type="number" name="num2" required><br><br>

      <input type="submit" value="Calculate">
    </form>

    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST["num1"];
        $b = $_POST["num2"];

        echo "<p>Sum: " . ($a + $b) . "<br>";
        echo "Difference: " . ($a - $b) . "<br>";
        echo "Product: " . ($a * $b) . "<br>";
        echo "Quotient: " . ($b != 0 ? ($a / $b) : "Cannot divide by zero") . "</p>";
      }
    ?>

    <a href="index.html" class="back-btn">⬅ Back to Home</a>
  </div>
</body>
</html>
