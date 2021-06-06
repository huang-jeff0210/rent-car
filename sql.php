<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL</title>
</head>
<body>
    <?php
    if (isset($_GET["Insert"])) {
        $link = @mysqli_connect("localhost","root","","租車申請");
        mysqli_query($link,"SELECT * FROM `rentForm`");
        mysqli_query($link, "INSERT INTO rentForm (取車地點, 還車地點, 車輛選擇, 取車時間, 還車時間, 姓名, 電話, 備註) VALUES ('$_GET["start_location"]', '$_GET["end_location"]', '$_GET["car"]', '$_GET["start_date"]', '$_GET["end_date"]', '$_GET["customer"]', '$_GET["phone"]', '$_GET["memo"]')"); 
        mysqli_close($link);
    }
    ?>
</body>
</html>