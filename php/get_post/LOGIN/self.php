<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
* {
    margin: 0;
    padding: 0;

}

.container {
    border: 1px solid black;
    width: 250px;
    margin: auto;
    padding: 10px;
    /* box-sizing: border-box; */
    box-shadow: 1px 1px 2px grey;
}

/* .nav {
    display: flex;
    flex-flow: column wrap;
    text-align: center;

} */
    </style>
</head>

<body>
    <main class="container">
    <form action="self.php" method="post">

    <?php

$users = [
    ['account' => 'me', 'password' => '1234'],
    ['account' => 'he', 'password' => '555'],
    ['account' => 'they', 'password' => '666'],
];





    if (!empty($_POST)) {

        $account  = $_POST['account'];
        $password = $_POST['password'];
// $login = $_POST['login'];
foreach ($users as $user) {
        if ($account == $user['account'] && $password == $user['password']) {
            echo "correct";
            echo "<br>";
            echo "success";
        } else {
            echo "fail";
            echo "<br>";
            echo "error";
        }
    }
}
?>
        <nav>
        <label for="account">account</label>
        <input type="text" name="account" id="account">
        <label for="password">password</label>
        <input type="password" name="password" id="password">
        <input type="submit" value="login">
        <input type="reset" value="reset">
        </nav>
    </form>

</main>
</body>

</html>