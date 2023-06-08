<?php
include 'config.php';
if (isset($_POST["snd"])) {
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $profession = mysqli_real_escape_string($conn, $_POST["profession"]);
    $comment = mysqli_real_escape_string($conn, $_POST["comment"]);

    $sql = "INSERT INTO tbl_comment(name, profession, comment) VALUES ('$name', '$profession', '$comment')";
    $result = mysqli_query($conn, $sql);
}
