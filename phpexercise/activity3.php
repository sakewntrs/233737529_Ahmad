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
    <?php
      $length = 10;
      $width = 5;
      $area = $length * $width;
      $perimeter = 2 * ($length + $width);
      echo "Length: $length<br>Width: $width<br>";
      echo "Area: $area<br>Perimeter: $perimeter";
    ?>
    <a href="index.html" class="back-btn">⬅ Back to Home</a>
  </div>
</body>
</html>
