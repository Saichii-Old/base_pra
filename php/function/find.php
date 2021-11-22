<?php
//找出單筆資料
echo "<pre>";
print_r(find('members',2));
echo "</pre>";

function find($table, $id){
    $dsn="mysql:host=localhost;charset=utf8;dbname=member";
    $pdo=new PDO($dsn,'root','');
    $sql="SELECT * FROM `$table` WHERE `id`='$id'";
    $rows=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    return $rows;
}




?>