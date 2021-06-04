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
$car_type = $_GET["car_type"];  // 取得選擇鈕值
switch ($car_type) {
    case "0":
        print "轎車<br/>"; break;
    case "1":
        print "休旅車<br/>"; break;
    case "2":
        print "跑車<br/>"; break;
    case "3":
        print "電動車<br/>"; break;

} 

$provide_location = $_GET["provide_location"];  // 取得選擇鈕值
switch ($provide_location) {
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