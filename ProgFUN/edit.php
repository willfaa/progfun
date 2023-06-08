<!-- <?php
        include "config.php";

        if (isset($_POST["checklist"])) {

            $name = $_POST['name'];
            $profession = $_POST['profession'];
            $comment = $_POST['comment'];
            $id = $_GET["id"];
            $sql = "UPDATE tbl_comment SET name='$name', 'profession'='$profession', 'comment'='$comment' WHERE id = '$id'";

            $result = mysqli_query($conn, $sql);
            if ($result) {
                // header("Location: index.php");
            } else {
                echo "Failed: " . mysqli_error($conn);
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
    <link rel="stylesheet" href="/ProgFUN/css/styleedit.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="main">
        <div class="edit-box">
            <?php
            $sql = "SELECT * FROM tbl_comment WHERE id = '$id'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            ?>
            <div class="comment-box" id="comment-box">
                <div class="comment-top">
                    <div class="user-comment">
                        <input type="text" id="name" name="name" class="name" value="<?php echo $name; ?>">
                        <input type="text" id="profession" name="profession" class="profession" value="<?php echo $profession; ?>">
                    </div>
                    <div class="wrap-icon">
                        <a class="checklist" name="checklist">
                            <i class="fa-solid fa-check fa-xl" style="color: white;"></i>
                        </a>
                        <a href="" class="back" name="back">
                            <i class="fa-solid fa-arrow-left fa-xl"></i>
                        </a>
                    </div>
                </div>
                <div class="txt-comment">
                    <input type="text" name="comment" class="comment" value="<?php echo $comment; ?>">
                </div>

            </div>
        </div>
    </div>
</body>

</html> -->