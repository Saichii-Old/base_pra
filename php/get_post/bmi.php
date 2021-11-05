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
$bmi=$_POST['weight']/($_POST['height']/100)*($_POST['height']/100);
if($bmi>=18.5 && $bmi<24){
    echo "你的BMI值為:" . $bmi;
    echo "經判斷為正常";
}else{
    echo "經判斷為異常";
}

?>
</body>
</html>