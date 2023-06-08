<div class="navbar">
    <div class="container-nav-logo">
        <a href="#" class="navbar-logo">
            <img src="../ProgFUN/assets/img/logo-progfun-2.png" alt="">
        </a><a href="#" class="navbar-logo1">
            <img src="../ProgFUN/assets/img/progfun1.png" alt="">
        </a>
    </div>
    <div class="user-info">
    </div>
    <div class="navbar-item">
        <?php
        if (isset($_SESSION['id'])) {
            echo $row["email"];
            echo "<a href='/ProgFUN/function/logout.php'>Logout</a>";
        } else {
            echo "you are not logged in";
            echo "<a href='/ProgFUN/main-nav/login.php'>Login</a>";
        }
        ?>
        <a href="/ProgFUN/main-nav/c++.php">C++</a>
        <a href="/ProgFUN/main-nav/phyton.html">Phyton</a>
        <a href="/ProgFUN/main-nav/java.html">Java</a>
    </div>
</div>