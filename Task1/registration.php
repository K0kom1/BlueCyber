<?php
require 'config.php';
if (!empty($_SESSION["id"])){
    header("Location: index.php");
}
if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
    if (mysqli_num_rows($duplicate) > 0){
        echo "<script> alert('Username hoặc Email đã tồn tại'); </script>";
    }else{
        if($password == $confirmpassword){
            $query = "INSERT INTO tb_user VALUE('','$name','$username', '$email','$password')";
            mysqli_query($conn,$query);
            echo "<script> alert('Registration Successful!'); </script>";
        }
        else{
            echo "<script> alert('Password does not match!'); </script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="registration.css">
</head>
<body>
    <div class="form">
        <form action="" method="post" autocomplete="off" >
            <div class="container">
                <h1>REGISTRATION</h1>
                <br>
                <br>
                <!-- <p>Xin hãy nhập biểu mẫu bên dưới để đăng ký.</p> -->
                <hr style="width:80%;">
                <label for="name"><b>Full Name</b></label>
                <input type="text" placeholder="Full name" name="name" id="name" autocomplete="off">

                <label for="username"><b>Username</b></label>
                <input type="text" placeholder="Username" required name="username" id="username" required>

                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Email" name="email" id="email" required>
            
                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Password" name="password" id="password" required>
            
                <label for="confirmpassword"><b>Confirm Password</b></label>
                <input type="password" placeholder="Confirm Password" name="confirmpassword" id="confirmpassword" required>
            
                <!-- <label class="boxcheck">
                    <input type="checkbox" checked="checked" name="remember" > Nhớ Đăng Nhập
                </label> -->
              
                <div class="clearfix">
                    <button type="submit" name="submit" class="signupbtn">Register</button>
                </div>
                <label class="" for="">
                    <a class="link_DangNhap" href="login.php">Login</a>
                </label>
            </div>
          </form>

    </div>
</body>
</html>

