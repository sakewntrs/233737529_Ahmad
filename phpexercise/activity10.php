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

    <form method="POST" action="">
      CI17 Grade: <input type="number" name="ci17" required><br><br>
      English Grade: <input type="number" name="english" required><br><br>
      History Grade: <input type="number" name="history" required><br><br>
      <input type="submit" value="Compute Grade">
    </form>

    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $CI17 = $_POST["ci17"];
        $English = $_POST["english"];
        $History = $_POST["history"];
        $average = ($CI17 + $English + $History) / 3;

        if ($average >= 90) $grade = "A";
        elseif ($average >= 80) $grade = "B";
        elseif ($average >= 70) $grade = "C";
        elseif ($average >= 60) $grade = "D";
        else $grade = "F";

        echo "Average: " . number_format($average, 2) . "<br>Grade: $grade";
      }
    ?>

    <a href="index.html" class="back-btn">⬅ Back to Home</a>
  </div>
</body>
</html>
