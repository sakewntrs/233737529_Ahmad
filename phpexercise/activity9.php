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

    <form method="POST" action="">
      Current Balance: <input type="number" name="balance" required><br><br>
      Deposit Amount: <input type="number" name="deposit" required><br><br>
      Withdraw Amount: <input type="number" name="withdraw" required><br><br>
      <input type="submit" value="Compute">
    </form>

    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $balance = $_POST["balance"];
        $deposit = $_POST["deposit"];
        $withdraw = $_POST["withdraw"];
        $balance = $balance + $deposit - $withdraw;
        echo "Final Balance: ₱$balance";
      }
    ?>

    <a href="index.html" class="back-btn">⬅ Back to Home</a>
  </div>
</body>
</html>
