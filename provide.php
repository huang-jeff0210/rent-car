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
    <!-- 圖檔上傳 -->
    <?php 
    if($_SERVER['REQUEST_METHOD'] === 'POST') { 
        if( $_FILES['photo']['error'] != '4' ) { // 檢查有沒上傳圖檔
            $file = $_FILES['photo']['tmp_name'] ;
            $fp      = fopen($file, 'r');
            $rawDataSS1 = fread($fp, filesize($file));
            fclose($fp);
            $_SESSION['sessionImg'] = $encodedSS1Data = base64_encode($rawDataSS1); // 將檔案邊碼(base64)後放入SESSION
        }
    }
    ?>
    <p style="text-align: right; margin-right: 400px; margin-top: 20px; margin-bottom: -50px; font-size: 25px; font-family: 'Noto Serif TC', serif;">上傳車輛照片</p>
        <p class="clear"></p>
    <?php 
    if( isset($_SESSION['sessionImg']) && $_SESSION['sessionImg'] != '' ) { // 檢查SESSION有沒有值
        echo '<img src="data:image/;base64,'.$_SESSION['sessionImg'].'" alt="car1" width="50%" height="50%" class="imgR" style="border: 2px solid #000;">'; // 顯示圖檔
    } else 
        echo '<p style="float: right; margin-right: 380px; margin-top: 100px; border: 2px solid #000; font-size: 25px; color:red; font-family: "Noto Serif TC", serif;">您未上傳車輛照片</p>';
    ?>
    <div id="form_1">
    <?php
    echo "<table border = '1' class='entryTable'>"; 
    echo "<caption>訂單確認</caption>";
    $car_type = $_POST["car_type"];  // 取得選擇鈕值
    echo "<tr><th>提供車輛種類</th><td>";
    switch ($car_type) {
        case "0":
            print "轎車</td></tr>"; break;
        case "1":
            print "休旅車</td></tr>"; break;
        case "2":
            print "跑車</td></tr>"; break;
        case "3":
            print "電動車</td></tr>"; break;
    
    } 
    
    $provide_location = $_POST["provide_location"];  // 取得選擇鈕值
    echo "<tr><th>車輛提供地點</th><td>";
    switch ($provide_location) {
        case "0":
            print "東吳大學</td></tr>"; break;
        case "1":
            print "士林捷運站</td></tr>"; break;
        case "2":
            print "劍潭捷運站</td></tr>"; break;
        case "3":
            print "大直美麗華</td></tr>"; break;
        case "4":
            print "故宮博物院</td></tr>"; break;
    } 

    $start_date = $_POST["start_date"];
    $start_time = $_POST["start_time"];
    echo "<tr><th>提供車輛起始時間</th><td>";
    print $start_date . " " .$start_time."</td></tr>";
    

    $end_date = $_POST["end_date"];
    $end_time = $_POST["end_time"];
    echo "<tr><th>提供車輛結束時間</th><td>";
    print $end_date . " " .$end_time."</td></tr>";


    $customer = $_POST["customer"];
    echo "<tr><th>姓名</th><td>";
    print $customer."</td></tr>";


    $phone = $_POST["phone"];
    echo "<tr><th>電話</th><td>";
    print $phone."</td></tr>";

    $memo = $_POST["memo"];
    echo "<tr><th>備註</th><td>";
    print nl2br($memo)."</td></tr>";
    echo "</table>";
    ?> 
      
    </div>

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
</body>

</html>