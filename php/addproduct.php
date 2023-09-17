<?php 
  include('../config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $image = $_FILES["image"]["tmp_name"];
    $imageData = file_get_contents($image);
    $name = $_POST['pName']; 
    $price = $_POST['pPrice']; 
    $quantity = $_POST['quantity']; 
    $category = $_POST['category']; 
    $desc = $_POST['body']; 

    echo($category);
    echo($price);
    echo($name);
    echo($desc);
// Create the SQL query using a prepared statement
$sql = "INSERT INTO products (productName, productPrice, productDesc, quantity, category, image) VALUES (?, ?, ?, ?, ?, ?)";

// Create a prepared statement using the database connection
$stmt = mysqli_prepare($conn, $sql);

if ($stmt) {
    // Bind the parameters
    mysqli_stmt_bind_param($stmt, "ssssss", $name, $price, $desc, $quantity, $category, $imageData);

    // Execute the query
    if (mysqli_stmt_execute($stmt)) {
        header("location:../pages/products.php");

    } else {
        echo "Error inserting product: " . mysqli_error($conn);
    }

    // Close the prepared statement
    mysqli_stmt_close($stmt);
} else {
    echo "Error preparing statement: " . mysqli_error($conn);
}}
?>