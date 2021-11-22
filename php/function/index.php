<?php
add(3,5);
echo "<br>";
echo add(3,5)+10; // add(3,5) 先產生出 echo $a + $b 的結果
echo "<br>";
$result = add(3,5);
echo $result+10;
echo "<br>";
echo "result=" . $result;

hello(" Nannan");

function add($a,$b){
    echo $a + $b ;
    return $a + $b; // 執行順序 echo $a + $b > 帶入 return 變數 > 進行運算
}
echo "<br>";
// 寫出一個函式 可以輸入名字 echo "hello XXX"
function hello ($name){
    echo "hello" . $name ;
}

hello(" Nannan");
?>

