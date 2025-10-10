<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Salary Calculator</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="activity-container">
    <h2>Salary Calculator</h2>
    <?php
      $basic = 25000;
      $allowance = 5000;
      $deduction = 3000;
      $net = $basic + $allowance - $deduction;
      echo "Net Salary: ₱$net";
    ?>
    <a href="index.html" class="back-btn">⬅ Back to Home</a>
  </div>
</body>
</html>
