<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Area & Perimeter</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="activity-container">
    <h2>Area and Perimeter of a Rectangle</h2>

    <form method="POST" action="">
      <label>Enter Length:</label><br>
      <input type="number" name="length" required><br><br>

      <label>Enter Width:</label><br>
      <input type="number" name="width" required><br><br>

      <input type="submit" value="Compute">
    </form>

    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $length = $_POST["length"];
        $width = $_POST["width"];
        $area = $length * $width;
        $perimeter = 2 * ($length + $width);

        echo "<p>Length: $length<br>Width: $width<br>";
        echo "Area: $area<br>Perimeter: $perimeter</p>";
      }
    ?>

    <a href="index.html" class="back-btn">⬅ Back to Home</a>
  </div>
</body>
</html>
