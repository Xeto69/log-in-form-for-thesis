<?php
session_start();
if (!isset($_SESSION['user_id'])) {
  header("Location: index.html");
  exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>

<div class="layout">
  <aside class="sidebar">
    <h2>Python Course</h2>
    <a href="?lesson=1">Lesson 1: Intro</a>
    <a href="?lesson=2">Lesson 2: Variables</a>
    <a href="?lesson=3">Lesson 3: Conditions</a>
    <a href="quiz.php?course=python">🧪 Quiz</a>
    <a href="challenge.php?course=python">🧠 Challenge</a>
  </aside>

  <main class="content">
    <?php
      $lesson = $_GET['lesson'] ?? 1;
      echo "<h1>Lesson $lesson</h1>";
      echo "<pre>";
      if ($lesson == 1) echo "print('Hello World')";
      if ($lesson == 2) echo "x = 10";
      if ($lesson == 3) echo "if x > 5:\n  print('Greater')";
      echo "</pre>";
    ?>
  </main>
</div>

<script src="js/progress.js"></script>
</body>
</html>
