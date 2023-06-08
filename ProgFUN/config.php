<?php
if (!isset($_SESSION)) {
    session_start();
    $conn = mysqli_connect("localhost", "root", "", "user_data");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
}
