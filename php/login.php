<?php
  include('../config.php');

  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM users WHERE email= '$email' and password= '$password'";

  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);

  if($result) {
    if($row=mysqli_num_rows($result)>0){
        echo " <p>User logged in successfully<a href='../index.hmtl'>continue to dashboard</a></p>";
        echo '<script>
          localStorage.setItem("user",JSON.stringify({email:"'.$email.'"}));
        </script>';
        // header("location:../index.html");
    }else{
        echo "Invalid username or password. <a href='../pages/login.html'>Go Back</a>";
    }
  } else{
      echo "Something went wrong, you can not login. Please try again later. <a href='login.php'>Go Back</a>";
  }

?>