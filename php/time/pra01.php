<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>給定兩個日期，計算中間間隔天數</h2>
    <span>開始:2021-10-1</span>
    <span>結束:2021-11-3</span>

    <?php
date_default_timezone_set('Asia/Taipei');
echo date("Y-m-d H:i:s");
echo "<br>";

echo "start time :" . strtotime ( '2021-10-01' );
echo "<br>";
echo "end time :" . strtotime ( '2021-11-03' );

$gapdays = (strtotime( '2021-11-03' )-strtotime( '2021-10-01' ))/(24*60*60);

echo "<br>間隔" . $gapdays . "天";

    ?>
</body>
</html>