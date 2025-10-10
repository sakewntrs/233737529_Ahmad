<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Grading System</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="activity-container">
    <h2>Simple Grading System</h2>
    <?php
      $CI17 = 85;
      $English = 90;
      $History = 80;

      $average = ($CI17 + $English + $History) / 3;

      if ($average >= 90) $grade = "A";
      elseif ($average >= 80) $grade = "B";
      elseif ($average >= 70) $grade = "C";
      elseif ($average >= 60) $grade = "D";
      else $grade = "F";

      echo "Average: $average<br>Grade: $grade";
    ?>
    <a href="index.html" class="back-btn">⬅ Back to Home</a>
  </div>
</body>
</html>
