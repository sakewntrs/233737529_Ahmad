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

    <form method="POST" action="">
      Basic Salary: <input type="number" name="basic" required><br><br>
      Allowance: <input type="number" name="allowance" required><br><br>
      Deduction: <input type="number" name="deduction" required><br><br>
      <input type="submit" value="Calculate">
    </form>

    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $basic = $_POST["basic"];
        $allowance = $_POST["allowance"];
        $deduction = $_POST["deduction"];
        $net = $basic + $allowance - $deduction;
        echo "Net Salary: ₱$net";
      }
    ?>

    <a href="index.html" class="back-btn">⬅ Back to Home</a>
  </div>
</body>
</html>
