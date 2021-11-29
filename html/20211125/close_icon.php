<?php
include "./common.php";
    // $errArr = [
    //     "id 3 del",
    //     "id 5 del",
    //     "id 7 del",
    //     "id 7 del",
    //     "id 7 del",
    // ];

    // $color = [
    //     "primary",
    //     "secondary",
    //     "success",
    //     "danger",
    //     "warning",
    // ];


    
// $errArr = [
//     ['id' => 't1' , 'message' => 'del id t1' , 'type' => 'danger'],
//     ['id' => 't2' , 'message' => 'del id t2' , 'type' => 'secondary'],
//     ['id' => 't3' , 'message' => 'del id t3' , 'type' => 'warning'],
// ];

$errArr = [
    ['t1' ,'del id t1' ,'danger'],
    ['t2' ,'del id t2' ,'secondary'],
    ['t3' ,'del id t3' ,'warning'],
];

    dd($errArr[0][1]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<body>
    <div class="container-fluid"></div>

<?php
// print_r ($errArr);
?>
<?php foreach ($errArr as $key => $value) :?>
    <div class="alert alert-<?=$value[2];?> text-primary" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        <h3><?=$value[1];?></h3>
    </div>
<?php endforeach; ?>









<hr>
    <div class="alert alert-primary" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        A simple primary alert—check it out!
    </div>




    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>