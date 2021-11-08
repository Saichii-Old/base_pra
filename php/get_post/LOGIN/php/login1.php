<?php

if(isset($_COOKIE['user'])){
    header('location:mem_center.php');
}

?>

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
<?php
if(isset($_GET['status']) && $_GET[status=='err']){
    echo "login fail";
}

?>

    <main class="container">
    <form action="./check_login.php" method="post">
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