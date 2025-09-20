<?php

// connection
$conn = mysqli_connect("localhost", "root", "");
if(!$conn) {
  echo "connect error" . mysqli_connect_error($conn);
}
$sql = "CREATE DATABASE IF NOT EXISTS todoapp";
$result = mysqli_query($conn, $sql);
mysqli_close($conn);

// create table
$conn = mysqli_connect("localhost", "root", "", "todoapp");
if(!$conn) {
  echo "connect error" . mysqli_connect_error($conn);
}
$sql = "CREATE TABLE IF NOT EXISTS task (
  id INT PRIMARY KEY AUTO_INCREMENT,
  title VARCHAR(200) NOT NULL
);";
$result = mysqli_query($conn, $sql);
mysqli_close($conn);