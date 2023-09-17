<?php
  include('../config.php');

  $sql = "SELECT * FROM products";

  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  if ($row) {
    foreach ($row as $key => $value) {
        echo "$key: $value<br>";
    }
} else {
    echo "No data found";
}
?>