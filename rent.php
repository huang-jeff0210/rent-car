<!DOCTYPE html>
<html lang="en">
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
    <form action="">
        <table border = "1" class="entryTable">
            <caption>訂單確認</caption>
            <tr>
<?php
$start_location = $_GET["start_location"];  // 取得選擇鈕值
switch ($start_location) {
    case "0":
        print "東吳大學<br/>"."</tr>"; break;
    case "1":
        print "士林捷運站<br/>"."</tr>"; break;
    case "2":
        print "劍潭捷運站<br/>"."</tr>"; break;
    case "3":
        print "大直美麗華<br/>"."</tr>"; break;
    case "4":
        print "故宮博物院<br/>"."</tr>"; break;
} 

$end_location = $_GET["end_location"];  // 取得選擇鈕值
switch ($end_location) {
    case "0":
        print "東吳大學<br/>"; break;
    case "1":
        print "士林捷運站<br/>"; break;
    case "2":
        print "劍潭捷運站<br/>"; break;
    case "3":
        print "大直美麗華<br/>"; break;
    case "4":
        print "故宮博物院<br/>"; break;
} 

$car = $_GET["car"];  // 取得選擇鈕值
switch ($car) {
    case "vios":
        print "2021 Vios 1.5雅緻＋</br>"; break;
    case "corolla":
        print "2021 Corolla Cross 1.8 Hybrid旗艦</br>"; break;
    case "camry":
        print "2021 Toyota Camry 2.0豪華</br>"; break;
    case "altis":
        print "2019 Altis 1.8豪華版</br>"; break;
    case "mazda":
        print "2019 MAZDA MAZDA 3 5D</br>"; break;
    case "rav4":
        print "2018 Toyota RAV4 2.0尊爵</br>"; break;
    case "yaris":
        print "2017 Yaris 1.5經典＋</br>"; break;
    case "wish":
        print "Toyota Wish 2.0豪華</br>"; break;
}

$start_date = $_GET["start_date"];
$start_time = $_GET["start_time"];
print $start_date . " " .$start_time."</br>";

$end_date = $_GET["end_date"];
$end_time = $_GET["end_time"];
print $end_date . " " .$end_time."</br>";

$customer = $_GET["customer"];
print $customer."</br>";

$phone = $_GET["phone"];
print $phone."</br>";

$memo = $_GET["memo"];
print nl2br($memo)."</br>";
?>    




            </tr>

        </table>

    </form>
        

</body>
</html>