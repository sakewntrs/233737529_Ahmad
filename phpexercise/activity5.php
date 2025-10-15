<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Swapping Variables</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="activity-container">
    <h2>Swapping Variables</h2>

    <form method="POST" action="">
      Variable 1: <input type="number" name="var1" required><br><br>
      Variable 2: <input type="number" name="var2" required><br><br>
      <input type="submit" value="Swap">
    </form>

    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $var1 = $_POST["var1"];
        $var2 = $_POST["var2"];
        echo "Before swapping: var1 = $var1, var2 = $var2<br>";
        $temp = $var1;
        $var1 = $var2;
        $var2 = $temp;
        echo "After swapping: var1 = $var1, var2 = $var2";
      }
    ?>

    <a href="index.html" class="back-btn">⬅ Back to Home</a>
  </div>
</body>
</html>
