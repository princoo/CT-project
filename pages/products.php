<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../css/products.css" />
</head>

<body>
    <!-- navbar -->

    <header>
        <h1>
            <img src="../images/Vector.svg" alt="" onclick="change()" id="theme" />
        </h1>
        <nav>
            <i class="side fa fa-close" onclick="hidemenu()"></i>
            <ul>
                <li><a href="../index.html">HOME</a></li>
                <li><a href="./products.php">PRODUCTS</a></li>
                <!-- <li><a href="about.html">ABOUT US</a></li> -->
                <li><a href="./contact.html">CONTACT</a></li>
                <li><a href="./login.html" id="a">LOGIN</a></li>
                <li><a href="./dashboard.html" id="dash">DASHBOARD</a></li>
            </ul>
        </nav>
        <i class="side fa fa-bars" onclick="showmenu()"></i>
    </header>

    <h4 style="color: rgb(242, 118, 41)">
        Discover a world of shopping delight at shopSpree. <br />
        shop the latest trends in fashion, home decor, electronics, and more!
    </h4>
    <div class="container" id="container">

<?php
  include('../config.php');

  $sql = "SELECT * FROM products";

  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  if ($row) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="card">';
        echo '    <div class="card-img">';
        echo '        <img src="../images/ecommerce.jpg" alt="" srcset="" style="width: 100%; height: 100%" />';
        echo '    </div>';
        echo '    <div class="card-info">';
        echo '        <p class="text-title">' . $row['productName'] . '</p>';
        echo '        <p class="text-body">' . $row['productDesc'] . '</p>';
        echo '    </div>';
        echo '    <div class="card-footer">';
        echo '        <span class="text-title">$' . $row['productPrice'] . '</span>';
        echo '        <button class="buy">BUY NOW</button>';
        echo '    </div>';
        echo '</div>';
    }

} else {
    echo "No data found";
}
?>
    </div>

    <script src="../javascript/runpage.js"></script>
</body>

</html>

