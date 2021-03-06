<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"></meta>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+TC&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="assets/images/icon.png" type="image/x-icon">
	<title>出租車種</title>
    <link href="style1.css" rel="stylesheet" type="text/css">
  	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style_slider.css">
    <link rel="stylesheet" href="assets/css/mbr-additional.css" type="text/css">
    <link rel="stylesheet" href="borrow_car.css">
</head>

<body >
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
        </header> 
        <div id='form_3'>
        <?php
        $conn=mysqli_connect("localhost","root","","愛車租借");
        $result = mysqli_query($conn,"SELECT `提供車輛種類`, `車輛提供地點`, `提供車輛起始日期`, `起始時間`, `提供車輛結束日期`, `結束時間` ,`備註` FROM `provide`");

        echo "<table border=1 class='car_table'><tr>";
        while ( $meta = mysqli_fetch_field($result) )
        echo "<td style='background-color: #898989; color:#fff;'>".$meta->name."</td>";
        echo "</tr>"; 
        $total_fields = mysqli_num_fields($result);
        // 顯示每一筆記錄
        while ($row = mysqli_fetch_row($result)) { 
        echo "<tr>"; 
        for ( $i = 0; $i <= $total_fields-1; $i++ )
            echo "<td>" . $row[$i] . "</td>";
        echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result); 
        mysqli_close($conn); 

        ?>
        </div>
        <p class="clear"></p>
        <footer>
            <div id="contact_us">
                Copyright © 佑宗租車公司 ALL RIGHTS RESERVED <br>
                公司地址：東吳大學 &nbsp&nbsp&nbsp電話：0800-420-420 &nbsp&nbsp&nbsp傳真：02-28825252
                    
            </div>
                
        </footer>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>
