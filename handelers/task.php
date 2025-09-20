<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "todoapp");
if(!$conn) {
  echo "connect error" . mysqli_connect_error($conn);
}

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["title"])) {
  $title = trim(htmlentities(htmlspecialchars($_POST['title'])));
  $sql = "INSERT INTO `task` (`title`) VALUES('$title')";
  $result = mysqli_query($conn, $sql);
  if(mysqli_affected_rows($conn) > 0) {
    $_SESSION['success'] = "Task added successfully";
  } else {
    $_SESSION['error'] = "Failed to add task";
  }
  header("Location: ../index.php");
}