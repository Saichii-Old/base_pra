<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>建立陣列練習</title>
</head>
<body>
    <h1>建立陣列練習</h1>
    <?php
    // $name=['judy','amo','john','peter','hebe'];
    $subject=['國文','英文','數學','地理','歷史'];
      '數學'=> '地理'=> '歷史'=>
      '數學'=> '地理'=> '歷史'=>
      '數學'=> '地理'=> '歷史'=>
      '數學'=> '地理'=> '歷史'=>

    $name['judy']=['國文'=>95,'英文'=>64,'數學'=>70,'地理'=>90,'歷史'=>84];
    $name['amo']=['國文'=>95,'英文'=>64,70,90,84];
    $name['john']=['國文'=>95,'英文'=>64,70,90,84];
    $name['peter']=['國文'=>95,'英文'=>64,70,90,84];
    $name['hebe']=['國文'=>95,'英文'=>64,70,90,84];

    echo "<pre>";
    print_r($name);

    print_r($name['judy']);
    echo "judy's grade is " . $name['judy']['歷史'];

    echo "</pre>";

    

   


?>


</body>
</html>