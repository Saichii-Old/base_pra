<?php
// $pdo = new PDO('資料庫連線資訊','帳號','密碼','[其他參數]');
// step 1
$var = "mysql:host=localhost;charset=utf8;dbname=students";
$pdo = new PDO($var,'root',''); //連線PDO

$range=(isset($GET_['id']))?$GET_['id']:100;

$sql = " select * from students where `id` < $range " ;
$rows = $pdo->query($sql)->fetchAll(); //從資料庫取得資料
// step 1 end



// echo "<pre>";
// print_r ($rows);
// var_dump ($rows); //判斷變數型態
// echo "</pre>";
?>

<!-- step 2 -->

<table>
    <tr>
        <td>num</td>
        <td>seat_num</td>
        <td>name</td>
        <td>birthday</td>
        <td>secondary</td>
<!-- step 2 end-->
        <td>gender</td>
        
    </tr>
    <?php
// step 2
foreach($rows as $row){
    echo "<tr>";
    echo "<td>" . $row ['uni_id']    . "</td>";
    echo "<td>" . $row ['seat_num']  . "</td>";
    echo "<td>" . $row ['name']      . "</td>";
    echo "<td>" . $row ['birthday']  . "</td>";
    echo "<td>" . $row ['secondary'] . "<br>";
// step 2
    if(mb_substr($row['national_id'],1,1)==1){
        echo "<td>men</td>";
    }else{
        echo "<td>girl</td>";   
    }



    echo "</tr>";
}

?>
</table>