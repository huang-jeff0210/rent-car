<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$start_location = $_GET["start_location"];  // 取得選擇鈕值
switch ($start_location) {
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
</body>
</html>