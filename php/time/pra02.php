<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>計算距離自己下一次生日還有幾天</h1>
<?php
// date_default_timezone_set('asia/taipei');
// echo "start time :" . strtotime('2021-10-25');
// echo "<br>";
// echo "end time :" . strtotime('2022-09-06');

// $gapdays = (strtotime( '2022-09-06' )-strtotime( '2021-10-25' ))/(24*60*60);
// echo "<br>還有" . $gapdays . "天";

date_default_timezone_set('Asia/Taipei');
    $today=strtotime(date("Y/m/d"));
    $birthday=strtotime(date("Y/10/7"));
    echo $today."<br>";
    echo $birthday."<br>";
    if($today>$birthday){
        $birthday=strtotime(date("Y/10/07",strtotime('+1 years')));
        echo $birthday; 
    }
    $ans=($birthday-$today)/(60*60*24);
    echo "下次生日還有 $ans 天";
?>
</body>
</html>