<!DOCTYPE html>
<?php   
$url = "top_page.html"; 
?> 
<html lang="zh-TW">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style1.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+TC&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/icon.png" type="image/x-icon">
    <title>佑宗租車</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style_slider.css">
    <link rel="stylesheet" href="assets/css/mbr-additional.css" type="text/css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <meta http-equiv="refresh" content="1;url=<?php echo $url; ?>">   
</head>

<body>
    <header>
        <section class="mbr-navbar mbr-navbar--freeze mbr-navbar--absolute mbr-navbar--transparent mbr-navbar--sticky mbr-navbar--auto-collapse" id="menu-59">
            <div class="mbr-navbar__section mbr-section">
                <div class="mbr-section__container container">
                    <div class="mbr-navbar__container">
                        <div class="mbr-navbar__column mbr-navbar__column--s mbr-navbar__brand">
                            <span class="mbr-navbar__brand-link mbr-brand mbr-brand--inline">
                                <span class="mbr-brand__logo"><a href=""><img class="mbr-navbar__brand-img mbr-brand__img" src="assets/images/icon.png" alt="Mobirise"></a></span>
                                <span class="mbr-brand__name"><a class="mbr-brand__name text-white" href="top_page.html">佑宗出租</a></span>
                            </span>
                        </div>
                        <div class="mbr-navbar__hamburger mbr-hamburger text-white"><span class="mbr-hamburger__line"></span></div>
                        <div class="mbr-navbar__column mbr-navbar__menu">
                            <nav class="mbr-navbar__menu-box mbr-navbar__menu-box--inline-right">
                                <div class="mbr-navbar__column">
                                    <ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-decorator mbr-buttons--active">
                                        <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="top_page.html#rent">我要租車</a></li>
                                        <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="top_page.html#provide_car">提供車輛出租</a></li>
                                        <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="borrow_car.html">車款介紹</a></li>
                                        <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="position.html">服務據點</a></li>
                                        <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="lovecar.php">愛車租借</a></li>
                                    </ul>
                                </div>
                                <div class="mbr-navbar__column">
                                    <ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active">
                                        <li class="mbr-navbar__item"></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="content-2 simple col-1 col-undefined mbr-parallax-background mbr-after-navbar" id="content5-77" style="background-image: url(assets/images/bmw.jpeg);">
            <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(0, 0, 0);"></div>
            <div class="container">
                <div class="row">
                    <div>
                        <div class="thumbnail">
                            <div class="caption">
                                <h3 style="font-family: 'Noto Serif TC', serif;">佑宗出 租了嗎</h3>
                                <div>
                                    <p style="font-family: 'Noto Serif TC', serif;">有用車需求？ 來找我們！ <br></p>
                                    <p style="font-family: 'Noto Serif TC', serif;">有閒置車輛？ 來找我們！ <br></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
        <?php
        $start_location = $_POST['start_location'];
        $end_location = $_POST['end_location'];
        $car = $_POST['car'];
        $start_date = $_POST['start_date'];
        $start_time = $_POST['start_time'];
        $end_date = $_POST['end_date'];
        $end_time = $_POST['end_time'];
        $customer = $_POST['customer'];
        $phone = $_POST['phone'];
        $memo = $_POST['memo'];
        $memo = $_POST['memo'];
        $total_price = $_POST['total_price'];
        // echo $start_location;
        $con=mysqli_connect("localhost","root","","租車申請");
        mysqli_query($con,"SELECT * FROM `rentform`");
        $sql="INSERT INTO rentform(取車地點,還車地點,車輛選擇,取車日期,取車時間,還車日期,還車時間,姓名,電話,備註,總金額)VALUES('$start_location','$end_location','$car','$start_date','$start_time','$end_date','$end_time','$customer','$phone','$memo','$total_price')";
        if (isset($_POST["write"]) || isset($_POST["write2"])) {
            mysqli_query($con,$sql);
        }
        mysqli_close($con);
        ?>
        <p style="text-align:center; font-size:50px; font-family: 'Noto Serif TC', serif; color: red; margin-top:10px;">⋯⋯頁面跳轉中⋯⋯</p>
	    </section>


    <p class="clear"></p>
    <footer>
        <div id="contact_us">
            Copyright © 佑宗租車公司 ALL RIGHTS RESERVED <br>
            公司地址：東吳大學 &nbsp&nbsp&nbsp電話：0800-420-420 &nbsp&nbsp&nbsp傳真：02-28825252
        </div>
        <p class="clear"></p>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script>
    function showModal() {
         $('#check').modal('show'); 
        }
    </script>
</body>
</html>