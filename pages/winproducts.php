<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/winblog.css">
</head>
<body>
    <header>
        <h1> <img src="../images/Vector.svg" alt=""  onclick="change()" id="theme"></h1>
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

    <!-- dashboard -->
    <div class="flex">
        <div class="left">
            <img src="../images/cover.jpg" alt="">
            <p style="color: rgb(223, 122, 40);"><b>INEZA PRINCE</b> </p>
            <p class="email" >princeineza@gmail.com</p>
            <a href="./winproducts.php"><div class="box blog"><p>PRODUCTS</p></div></a>
            <a href="#"><div class="box drafts"><p>DRAFTS</p></div></a>
            <a href="#"><div class="box messages"><p>MESSAGES</p></div></a> 
            <a href="./dashboard.html"><div class="box add"><p>ADD PRODUCT</p></div></a>
            <a href="#"><div class="box manage"><p>MANAGE</p></div></a>
        </div>
    <div class="right">
        <h1>DASHBOARD</h1>
        <?php
  include('../config.php');

  $sql = "SELECT * FROM products";

  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  if ($row) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="blogs">';
        echo '    <div class="imagediv">';
        echo '        <img src="../images/ecommerce.jpg" alt="" srcset="" class="image">';
        echo '    </div>';
        echo '    <div class="parag"><p>' . $row['productDesc'] . '</p></div>';
        echo '    <div class="edit">';
        echo '        <div class="div"><i class="icon1 fa fa-star" id="like" aria-hidden="true" style="color: rgb(0, 221, 255);"></i><br><span>3</span></div>';
        echo '        <div class="div"><i class="icon2 fa fa-comment" aria-hidden="true" style="color: chocolate;"></i> <br><span>2</span></div>';
        echo '        <div class="div green"><i class="change fa fa-edit" id="1" style="color: green;"></i> <br><span>Edit</span></div>';
        echo '        <div class="div delete"><i class="delete fa fa-trash" id="delete" aria-hidden="true" onClick="save()" style="color: red;"></i> <br><span>Delete</span></div>';
        echo '    </div>';
        echo '</div>';
    }

} else {
    echo "No data found";
}
?>  
    </div>
    <script>
        save(){
            console.log('first')
        }
    </script>
</body>
</html>