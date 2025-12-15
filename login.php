<?php
session_start();
require "db.php";

$user = $_POST['username'];
$pass = $_POST['password'];

$stmt = $conn->prepare(
  "SELECT id FROM users WHERE username=? AND password=?"
);
$stmt->bind_param("ss", $user, $pass);
$stmt->execute();
$stmt->bind_result($id);

if ($stmt->fetch()) {
  $_SESSION['user_id'] = $id;
  header("Location: dashboard.php");
} else {
  echo "Invalid login";
}
