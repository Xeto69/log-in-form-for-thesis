<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>

<h1>Python Quiz</h1>

<form method="post">
  <p>What prints text in Python?</p>
  <input type="radio" name="q1" value="print"> print()<br>
  <input type="radio" name="q1" value="echo"> echo()<br>

  <button type="submit">Submit</button>
</form>

<?php
if ($_POST) {
  $score = ($_POST['q1'] === 'print') ? 100 : 0;
  echo "<h2>Score: $score%</h2>";
}
?>
</body>
</html>
