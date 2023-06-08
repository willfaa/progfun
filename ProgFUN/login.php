<?php
require 'config.php';
if (isset($_POST["submit"])) {
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM tbl_user WHERE username = '$usernameemail' OR email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if (mysqli_num_rows($result) > 0) {
    if ($password == $row['password']) {
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: index.php");
      exit();
    } else {
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  } else {
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Progfun | Progamming Fundamental</title>
  <link rel="icon" href="/ProgFUN/assets/img/logo-progfun-2.png" />
  <link rel="stylesheet" href="/ProgFUN/css/stylelogin.css" />
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <form action="" method="post" class="form-box" autocomplete="off">
    <a href="c++.php" class="home">Home</a>
    <h1>Welcome</h1>
    <div class="input-group">
      <div class="inputfield">
        <i class="fa-solid fa-user" style="color: #003731"></i>
        <input type="text" name="usernameemail" id="usernameemail" placeholder="username/email" required value="" />
      </div>
      <div class="inputfield">
        <i class="fa-solid fa-lock" style="color: #003731"></i>
        <input type="password" name="password" id="password" placeholder="password" value="" />
      </div>
    </div>
    <div class="btn-field">
      <button class="login-btn" type="submit" name="submit">
        Login
      </button>

      <a href="register.php" class="regis">
        Register
      </a>
    </div>
  </form>

</body>

</html>