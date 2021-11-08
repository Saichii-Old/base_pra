<?php

if (!empty($_POST)) {

    $account  = $_POST['account'];
    $password = $_POST['password'];
// $login = $_POST['login'];

    if ($account == 'admin' && $password == '123') {
        echo "correct";
        echo "<br>";
        echo "success";
    } else {
        echo "fail";
        echo "<br>";
        echo "error";
    }

}
