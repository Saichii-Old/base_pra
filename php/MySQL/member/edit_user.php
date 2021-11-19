<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit user</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
    <?php include "./include/head.php" ?>
    <?php include "./include/header.php"; ?>
    <?php include "./include/nav.php"; ?>
    <?php include "./include/side_bar.php"; ?>
    
    <div class="content">
        edit user

        <form action="" method="post">

        <div class="form-group">
            <label for="address">address</label>
            <input type="text" name="address" id="address">
        </div>
        
        <div class="form-group">
            <label for="mobile">mobile</label>
            <input type="text" name="mobile" id="mobile">
        </div>

        <div class="form-group">
            <label for="Email">Email</label>
            <input type="email" name="Email" id="Email">
        </div>
        
        <div class="form-group>
        <label for="birthday">birthday</label>
        <input type="date" name="birthday" id="birthday">
        </div>

        <div class="form-group>
        <button class="btn btn-outline-success" type="submit"><i class="far fa-paper-plane"></i> 送出</button>



        </div>

        











        </form>
    </div>
    <?php include "./include/footer.php"; ?>

    <!-- jqurey js-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <!-- popper js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
        crossorigin="anonymous"></script>
</body>
</html>