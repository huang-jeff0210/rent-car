<!DOCTYPE html>
<html lang="zh-TW">
<head>
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
    </header>
    <p style="text-align: right; margin-right: 400px; margin-top: 20px; margin-bottom: -50px; font-size: 25px; font-family: 'Noto Serif TC', serif;">車輛照片</p>
        <p class="clear"></p>
    <img src="<?php $car = $_GET["car"];
    switch ($car) {
        case "vios":
            print "photo/Vios.jpeg"; break;
        case "corolla":
            print "photo/corolla.jpg"; break;
        case "camry":
            print "photo/camry.jpeg"; break;
        case "altis":
            print "photo/Altis.jpg"; break;
        case "mazda":
            print "photo/mazda.png"; break;
        case "rav4":
            print "photo/rav4.jpg"; break;
        case "yaris":
            print "photo/yaris.jpg"; break;
        case "wish":
            print "photo/wish.jpg"; break;
    }?>" alt="car1" width="50%" height="50%" class="imgR" style="border: 2px solid #000;">

    <div id="form_1">
    
    <?php
    echo "<table border = '1' class='entryTable'>"; 
    echo "<caption>訂單確認</caption>";
    $start_location = $_GET["start_location"];  // 取得選擇鈕值
    echo "<tr><th>取車地點</th><td>";
    switch ($start_location) {
        case "東吳大學":
            print "東吳大學</td></tr>"; break;
        case "士林捷運站":
            print "士林捷運站</td></tr>"; break;
        case "劍潭捷運站":
            print "劍潭捷運站</td></tr>"; break;
        case "大直美麗華":
            print "大直美麗華</td></tr>"; break;
        case "故宮博物院":
            print "故宮博物院</td></tr>"; break;
    } 


    $end_location = $_GET["end_location"];  // 取得選擇鈕值
    echo "<tr><th>還車地點</th><td>";
    switch ($end_location) {
        case "東吳大學":
            print "東吳大學</td></tr>"; break;
        case "士林捷運站":
            print "士林捷運站</td></tr>"; break;
        case "劍潭捷運站":
            print "劍潭捷運站</td></tr>"; break;
        case "大直美麗華":
            print "大直美麗華</td></tr>"; break;
        case "故宮博物院":
            print "故宮博物院</td></tr>"; break;
    } 
    $car = $_GET["car"];  // 取得選擇鈕值
    echo "<tr><th>車輛選擇</th><td>";
    switch ($car) {
        case "vios":
            print "2021 Vios 1.5雅緻＋</td></tr>"; break;
        case "corolla":
            print "2021 Corolla Cross 1.8 Hybrid旗艦</td></tr>"; break;
        case "camry":
            print "2021 Toyota Camry 2.0豪華</td></tr>"; break;
        case "altis":
            print "2019 Altis 1.8豪華版</td></tr>"; break;
        case "mazda":
            print "2019 MAZDA MAZDA 3 5D</td></tr>"; break;
        case "rav4":
            print "2018 Toyota RAV4 2.0尊爵</td></tr>"; break;
        case "yaris":
            print "2017 Yaris 1.5經典＋</td></tr>"; break;
        case "wish":
            print "Toyota Wish 2.0豪華</td></tr>"; break;
    }
    


    $start_date = $_GET["start_date"];
    $start_time = $_GET["start_time"];
    echo "<tr><th>取車時間</th><td>";
    print $start_date . " " .$start_time."</td></tr>";
    

    $end_date = $_GET["end_date"];
    $end_time = $_GET["end_time"];
    echo "<tr><th>還車時間</th><td>";
    print $end_date . " " .$end_time."</td></tr>";


    $customer = $_GET["customer"];
    echo "<tr><th>姓名</th><td>";
    print $customer."</td></tr>";


    $phone = $_GET["phone"];
    echo "<tr><th>電話</th><td>";
    print $phone."</td></tr>";

    $memo = $_GET["memo"];
    echo "<tr><th>備註</th><td>";
    print nl2br($memo)."</td></tr>";
    echo "</table>";
    ?> 
 
    <div style = "font-size: 25px; font-family: 'Noto Serif TC', serif;">總共金額：<span style="color:red">
    <?php
    $date = (strtotime($end_date)-strtotime($start_date))/86400;
    $total_price = $date*3000;
    print $total_price."元整</p></div>";
    ?>
        
        <div style="padding-top: 10px;padding-left: 10px;">
            <button type="submit" name="Insert" class="btn btn-primary" onclick="showModal()">前往結帳</button>
        </div>

    </div>
    
    <!--彈跳視窗事件 -->
    <div class="modal" tabindex="-1" role="dialog" id="check">
        <div class="modal-dialog" role="document"> 
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">收到訂單 ! ! !</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button> 
                </div>
                <div class="modal-body">
                                   <p>我們已收到您的訂單，請記得提前15分鐘來辦理相關手續</p> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"><a href="top_page.html#rent">關閉</a></button>
                    <button type="button" class="btn btn-secondary" color="white"><a href="top_page.html">返回首頁</a></button>
                </div>
            </div>
        </div>
    </div>

    <?php
    $con=mysqli_connect("localhost","root","","租車申請");
    mysqli_query($con,"SELECT * FROM `rentform`");
    $sql="INSERT INTO rentform(取車地點,還車地點,車輛選擇,取車日期,取車時間,還車日期,還車時間,姓名,電話,備註,總金額)VALUES('$start_location','$end_location','$car','$start_date','$start_time','$end_date','$end_time','$customer','$phone','$memo','$total_price')";
    if (isset($_GET["Insert"])) {
        mysqli_query($con,$sql);
    }
    mysqli_close($con);
    ?>


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