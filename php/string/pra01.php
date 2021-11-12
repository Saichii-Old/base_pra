<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>字串取代</title>
</head>
<body>
    <h2>將字串"Ahoy!"改成"I'm horny!</h2>
<?php
$str = "Ahoy!";
echo str_replace("Ahoy!", "I'm horny!", "Ahoy!");


echo "<br>";

$str= "aaddw1123"; //改成"******" 
echo str_repeat("*",strlen($str)) ; 

?>
</body>
</html>