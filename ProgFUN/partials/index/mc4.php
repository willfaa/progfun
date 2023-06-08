<?php
include 'comment.php';
include 'delete.php';
include 'edit.php';
?>
<div class="main-content4">
    <div class="cntnr-cpp">
        <nav class="logo-cpp">
            <a href="#c++">
                <img src=".//assets/img/logo-cpp.png" alt="logo-c++" />
            </a>
        </nav>
        <div data-aos="zoom-in-down">
            <div class="cntnr-txt-cpp">
                <h2>C++</h2>
            </div>
        </div>
    </div>
    <div class="cntnr-py">
        <nav class="logo-py">
            <a href="#phyton">
                <img src="../ProgFUN/assets/img/logo-pyh.png" alt="logo-phyton" />
            </a>
        </nav>
        <div data-aos="zoom-in-down">
            <div class="cntnr-txt-py">
                <h2>Phyton</h2>
            </div>
        </div>
    </div>
    <div class="cntnr-java">
        <nav class="logo-java">
            <a href="#java">
                <img src="../ProgFUN/assets/img/logo-java.png" alt="logo-java" />
            </a>
        </nav>
        <div data-aos="zoom-in-down">
            <div class="cntnr-txt-java">
                <h2>Java</h2>
            </div>
        </div>
    </div>
</div>

<div class="container-cmmnt">
    <?php
    $sql = "SELECT * FROM `tbl_comment`";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <div class="comment-box" id="comment-box">

            <div class="comment-top">
                <div class="user-comment">

                    <h2><?php echo $row['name']; ?></h2>
                    <h4><?php echo $row['profession']; ?></h4>
                </div>
                <div class="icons">
                    <a href="edit.php?id=<?php echo $row['id'] ?>" class="edit" name="edit" id="edit">
                        <i class="fa-solid fa-pen-to-square"></i>

                    </a>
                    <a href="delete.php?id=<?php echo $row['id'] ?>" class="close" name="close" id="close">
                        <i class="fa-solid fa-xmark"></i>
                    </a>
                </div>
            </div>
            <div class="txt-comment">
                <h2>
                    <?php echo $row['comment']; ?>
                </h2>
            </div>

        </div>
    <?php
    }
    ?>
</div>

<footer class="footer-main4">
    <div class="abt-us">
        <div class="line-abt-us-left"></div>
        <a href="" class="cntct-us">contact us</a>
        <div class="line-abt-us-right"></div>
    </div>
    <div class="ftr-btm">
        <div class="btm-lft">
            <div class="container-info">
                <div class="info-txt">
                    <img src="../ProgFUN/assets/img/progfun-singkat1.png" alt="" />
                    <h2>Membantu Anda untuk belajar ataupun memahami pemrograman C++, Phyton, dan java secara fun dan menyenangkan untuk mengambangkan potensi diri dari setiap individu</h2>
                </div>
                <div class="build">
                    <img src="../ProgFUN/assets/img/build.png" alt="" />
                    <div class="txt-build">
                        <h2>pt. foursiblings</h2>
                        <h2>jl. jendral ahmad yani no 176-178 surabaya</h2>
                    </div>
                </div>
                <div class="phone">
                    <img src="../ProgFUN/assets/img/phone.png" alt="" />
                    <div class="txt-phone">
                        <h2>+62 817-0338-8368</h2>
                    </div>
                </div>
                <div class="mail">
                    <img src="../ProgFUN/assets/img/mail.png" alt="" />
                    <div class="txt-mail">
                        <h2>siblingschill@gmail.com</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="btm-rght">
            <form action="" class="form-comment" method="post">
                <div class="container-input-ftr">
                    <div class="input-ftr-1">
                        <input type="text" name="name" placeholder="Your Name....(Max length 25)" maxlength="25" id="name" name="name" />
                    </div>
                    <div class="input-ftr-2">
                        <input type="text" name="profession" id="profession" placeholder="Profession....(Max length 15)" maxlength="15" id="profession" name="profession" />
                    </div>
                    <!-- additional if need email -->
                    <!-- <div class="input-ftr-3">
                <input type="text" placeholder="Your Email....(Max length 40)" maxlength="40" id="email" name="email" />
              </div> -->
                    <div class="input-ftr-4">
                        <textarea name="comment" id="comment" cols="30" rows="10" placeholder="Message...." maxlength="222"></textarea>
                    </div>
                    <div name="send" id="send" class="send">
                        <a href="comment.php">
                            <button type='submit' name='snd' id='snd' class='snd'>
                                <img src='../ProgFUN/assets/img/send.png' alt='' />
                            </button>
                        </a>
                        <!-- additional -->
                        <!-- if (isset($_SESSION['id'])) {
                        } else {
                        } -->
                    </div>

                </div>
            </form>
        </div>
    </div>
</footer>