<?php
include_once "config.php";
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "DELETE FROM tbl_comment WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: index.php");
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
}
