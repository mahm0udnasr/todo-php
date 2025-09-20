<?php
session_start();


if(isset($_GET["id"])) {
  $conn = mysqli_connect("localhost", "root", "", "todoapp");
  if(!$conn) {
    echo "connect error" . mysqli_connect_error($conn);
  }
  $id = mysqli_real_escape_string($conn, $_GET["id"]);
  $sql = "DELETE FROM `task` WHERE id = '$id'";
  $result = mysqli_prepare($conn, $sql);
  if(mysqli_stmt_execute($result)) {
      if(mysqli_affected_rows($conn) > 0) {
          $_SESSION['success'] = "Task Deleted successfully";
      } else {
          $_SESSION['error'] = "Failed to Delete task";
      }
  } else {
      $_SESSION['error'] = "Error executing query";
  }
  header("Location: ../index.php");
}