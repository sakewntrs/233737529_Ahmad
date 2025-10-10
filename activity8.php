<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>String Manipulation</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="activity-container">
    <h2>String Manipulation</h2>
    <?php
      $sentence = "Ahmad Brothers Cafe Is Authentic!";
      echo "Number of characters: " . strlen($sentence) . "<br>";
      echo "Number of words: " . str_word_count($sentence) . "<br>";
      echo "Uppercase: " . strtoupper($sentence) . "<br>";
      echo "Lowercase: " . strtolower($sentence);
    ?>
    <a href="index.html" class="back-btn">⬅ Back to Home</a>
  </div>
</body>
</html>
