<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>尋找字串與HTML、css整合應用</title>
</head>
<body>
    <p>給定一個句子，將指定的關鍵字放大<br>
“學會PHP網頁程式設計，薪水會加倍，工作會好找”<br>
請將上句中的 “程式設計” 放大字型或變色.</p>

<?php

$str  = "學會PHP網頁程式設計，薪水會加倍，工作會好找";
$sub  = "程式設計";
$span = "<span style='font-size:30px;color:red'>$sub</span>";

echo str_replace($sub, $span, $str);

?>

</body>
</html>
