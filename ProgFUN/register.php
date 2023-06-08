<?php
require 'config.php';
if (!empty($_SESSION["id"])) {
    header("Location: index.php");
    exit();
}
if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $duplicate = mysqli_query($conn, "SELECT * FROM tbl_user WHERE username = '$username' OR email = '$email'");
    if (mysqli_num_rows($duplicate) > 0) {
        echo
        "<script> alert('Username or Email Has Already Taken'); </script>";
    } else {
        if ($password == $confirmpassword) {
            $query = "INSERT INTO tbl_user VALUES('','$username','$email','$password')";
            mysqli_query($conn, $query);
            echo
            "<script> alert('Registration Successful'); </script>";
        } else {
            echo
            "<script> alert('Password Does Not Match'); </script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Progfun | Progamming Fundamental</title>
        <link rel="icon" href="/ProgFUN/assets/img/logo-progfun-2.png" />
        <link rel="stylesheet" href="/ProgFUN/css/styleregister.css" />
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
</head>

<body>
</body>
<form action="" method="post" class="form-box" autocomplete="off">
    <a href="c++.php" class="home">Home</a>
    <h1>Register</h1>
    <div class="input-group">
        <div class="inputfield">
            <i class="fa-solid fa-user" style="color: #003731"></i>
            <input type="text" name="username" id="username" placeholder="username" required value="" />
        </div>
        <div class="inputfield">
            <i class="fa-solid fa-envelope" style="color: #003731"></i>
            <input type="text" name="email" id="email" placeholder="email" required value="" />
        </div>
        <div class="inputfield">
            <i class="fa-solid fa-lock" style="color: #003731"></i>
            <input type="password" name="password" id="password" placeholder="password" value="" />
        </div>
        <div class="inputfield">
            <i class="fa-solid fa-lock" style="color: #003731"></i>
            <input type="password" name="confirmpassword" id="confirmpassword" placeholder="confirm password" value="" />
        </div>
    </div>
    <div class="btn-field">
        <button class="login-btn" type="submit" name="submit">
            Register
        </button>

        <a href="login.php" class="regis">
            Login
        </a>
    </div>
</form>

</html>