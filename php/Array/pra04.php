<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>找出五百年內的閏年</title>
</head>
<body>
<?php
$year  = 2021;
$leaps = [];
for ($i = $year; $i <= ($year + 500); $i++) {
    if ($i % 400 == 0 || ($i % 4 == 0 && $i % 100 != 0)) {
        $leaps[] = $i;
    }
}
echo "<pre>";
print_r($leaps);
echo "</pre>";

$j = 2453;
if (in_array($j, $leaps)) {
    echo $j . "是閏年";
} else {
    echo $j . "不是閏年";
}
?>
</body>
</html>