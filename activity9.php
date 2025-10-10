<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bank Account Simulation</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="activity-container">
    <h2>Bank Account Simulation</h2>
    <?php
      $balance = 1000;
      $deposit = 500;
      $withdraw = 200;
      $balance = $balance + $deposit - $withdraw;
      echo "Final Balance: ₱$balance";
    ?>
    <a href="index.html" class="back-btn">⬅ Back to Home</a>
  </div>
</body>
</html>
