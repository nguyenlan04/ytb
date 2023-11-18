<?php
$mysqli = new mysqli("localhost","root","","web_shop");

// Check connection
if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL:(kết nối lỗi) " . $mysqli->connect_error;
  exit();
}
?>