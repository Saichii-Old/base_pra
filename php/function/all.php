<?php

$rows=all('account');

// echo "<pre>";
// print_r("account");
// echo "</pre>";

foreach($rows as $row){
    echo $row['id'] . "-" . $row['account'] . "<br>";
}

//取出指定資料表的所有資料
function all($table){
    $dsn = "mysql:host=localhost;charset=utf8;dbname=member";
    $pdo = new PDO($dsn,'root','');
    $sql = "SELECT * FROM `$table`";
    $rows = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
    //return $pdo->query($sql)->fetchAll();

}

?>