<?php
session_start();
require "db.php";

$data = json_decode(file_get_contents("php://input"), true);

$stmt = $conn->prepare(
  "UPDATE progress SET lesson=? WHERE user_id=? AND course=?"
);
$stmt->bind_param(
  "iis",
  $data['lesson'],
  $_SESSION['user_id'],
  $data['course']
);
$stmt->execute();
