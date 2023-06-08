<?php
include 'config.php';
include 'comment.php';
// include 'edit.php';
if (!empty($_SESSION["id"])) {
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM tbl_user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
  // if (mysqli_num_rows($result) > 0) {
  //   header("Location:index.php " . $_SERVER['PHP_SELF'] . "?id=" == $row['id']);
  //   exit();
  // }
} else {
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Progfun | Progamming Fundamental</title>
  <link rel="icon" href="/ProgFUN/assets/img/logo-progfun-2.png" />
  <link rel="stylesheet" href="/ProgFUN/css/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://unpkg.com/aos@next/dist/aos.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <script src="/ProgFUN//javascript/script.js"></script>
</head>

<body>
  <section class="main" id="main1">
    <?php
    include_once "../ProgFUN/partials/index/header.php";
    include_once "../ProgFUN/partials/index/mc1.php";
    ?>
  </section>
  <section class="main2" id="main2">
    <?php
    include_once "../ProgFUN/partials/index/mc2.php";
    ?>
  </section>
  <section class="main3" id="main3">
    <?php
    include_once "../ProgFUN/partials/index/mc3.php";
    ?>
  </section>
  <section class="main4">
    <?php
    include_once "../ProgFUN/partials/index/mc4.php";
    ?>
  </section>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>