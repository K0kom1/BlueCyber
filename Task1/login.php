<?php
require 'config.php';
if (!empty($_SESSION["id"])){
    header("Location: index.php");
}
if(isset($_POST["submit"])){
    $usernameemail = $_POST["usernameemail"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$usernameemail' OR email = '$usernameemail'");
    $row = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) > 0 && $password == $row["password"]){
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            echo $row["id"];
            header("Location: index.php"); 
    }else{
        echo "<script> alert('Username,Email or Password not Registered'); </script>";
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
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="signin">
        <form action="" method="post" autocomplete="off">
            <div class="container">
                <div class="heading">
                    <h1>LOGIN</h1>
                    <p></p>
                </div>
                <hr class="hr" >
                <div class="form_signin">
                    <label class="lable_form_signin" for="usernameemail">Username or Email</label>
                    <input class="input_form_signin" type="text" name="usernameemail" id="usernameemail" required placeholder="Username or Email">
                </div>
    
                <div class="form_signin">
                    <label class="lable_form_signin" for="password">Password</label>
                    <input class="input_form_signin" type="password" name="password" id="password" required placeholder="Password">
                </div>
                <div class="btn">
                    <button type="submit" name="submit" class="btn-signin">Sign in</button>
                </div>
                <div class="Forgot_password">
                    <!-- <a class="Link_Fortgot--password" href="">Quên mật khẩu</a> -->
                    <a class="Link_Fortgot--password" href="registration.php">Đăng ký</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>

