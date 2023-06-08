<?php
$path = $_SERVER['REQUEST_URI'];
$path = explode('/', $path);
$path = end($path);
?>
<div class="navbar">
    <div class="navbar-left">
        <div class="navbar-logo">
            <img class="frog" src="/ProgFUN/assets/img/logo-progfun-2.png" alt="logo-progfun" />
            <img class="txt" src="/ProgFUN/assets/img/progfun1.png" alt="txt-progfun" />
        </div>
        <div class="nvbr" id="navitem">
            <li>
                <a href="index.php"><button>home</button></a>
            </li>
            <li <?php if ($path == 'c++.php') {
                    echo "class='aktif'";
                } ?>>
                <a href="c++.php"><button>c++</button></a>
            </li>
            <li <?php if ($path == 'phyton.php') {
                    echo "class='aktif'";
                } ?>>
                <a href="phyton.html"><button>phyton</button></a>
            </li>
            <li <?php if ($path == 'java.php') {
                    echo "class='aktif'";
                } ?>>
                <a href="java.html"><button>java</button></a>
            </li>
        </div>
    </div>
    <div class="navbar-right">
        <div class="gcse-search"></div>
    </div>
</div>
<style>
    /* --navbar start-- */
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100&family=Ruda:wght@600&family=Ropa+Sans&family=Sanchez&family=Play&family=Roboto&family=Play&family=Red+Rose&display=swap');

    :root {
        --primary: #001d03;
        --fc1: #ffffff;
        --fc2: #00e0c6;
        --fc3: #210964;
        --fc4: #3063ee;
        --fc5: #003731;
        --ff-sanchez: 'Sanchez';
        --ff-redrose: 'Red Rose';
        --ff-ruda: 'Ruda';
        --ff-play: 'Play';
        --ff-inter: 'Inter';
        --ff-roboto: 'Roboto';
        --ff-ropa: 'Ropa Sans';
    }

    .navbar {
        justify-content: space-between;
        display: flex;
        align-items: center;
        background-color: var(--fc5);
        padding-right: 20px;
    }

    .navbar-left {
        display: flex;
        gap: 50px;
    }

    .navbar-logo {
        display: flex;
        position: relative;
        flex-direction: column;
        align-items: center;
        padding: 10px 30px;
    }

    .navbar-left .frog {
        width: 50px;
        height: auto;
    }

    .navbar-left .txt {
        width: 80px;
        height: auto;
    }

    .nvbr li {
        list-style-type: none;
        display: inline-flex;
        padding: 0px 0px;
        position: relative;
    }

    .nvbr li a button {
        cursor: pointer;
        display: block;
        color: var(--fc2);
        font-weight: 400;
        font-size: 20px;
        text-transform: capitalize;
        width: 90px;
        height: 70px;
        text-decoration: none;
        background: transparent;
    }

    .navbar-right {
        position: relative;
        display: flex;
        justify-content: end;
        padding-right: 0%;
    }

    .gcse-search {
        width: auto;
        height: 20px;
    }

    /* --navbar end-- */

    .aktif {
        background-color: #001d03;

    }
</style>