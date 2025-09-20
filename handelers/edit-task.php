<?php
session_start();


if(isset($_GET["id"]) && isset($_POST["title"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
  $conn = mysqli_connect("localhost", "root", "", "todoapp");
  if(!$conn) {
    echo "connect error" . mysqli_connect_error($conn);
  }
  $id = mysqli_real_escape_string($conn, $_GET["id"]);
  $title = trim(htmlentities(htmlspecialchars($_POST['title'])));
  $sql = "UPDATE `task` SET `title` = '$title' WHERE `id` = '$id'";
  $result = mysqli_query($conn, $sql);
  if(mysqli_affected_rows($conn) > 0) {
      $_SESSION['success'] = "Task Updated successfully";
  } else {
      $_SESSION['error'] = "Failed to update task";
  }
  header("Location: ../index.php");
}