<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>channel</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;

        }

        nav {
            height: 50px;
            box-shadow: 0 2px 10px #ccc;
            display: block;
            width: 100%;
            padding: 10px 5px;
            text-align: right;
        }
        
        button {
            padding: 5px 10px;
        }
    </style>
</head>
<body>
    <nav>
        <a href="reg.php"><button>註冊會員</button></a>
        <a href="login.php"><button>登入</button></a>

    </nav>
    
    <div>
    <label for="" name="acc">account</label>    
    <input type="text" name="acc" id="acc">

    <label for="" name="pw">password</label>      
    <input type="password" name="pw" id="pw">

    </div>
</body>
</html>