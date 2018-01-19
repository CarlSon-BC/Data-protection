<?php require_once ('rsashifr.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RSA</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar">
    <h2 class="text-center">Защита инф систем Кагерманов Шамильхан ИВБО-4-14</h2>
</nav>
<div id="start_inf">Шифрование c помощью <u>алгоритма RSA</u></div>
<div class="container marg-top">
    <div class="row">
    <div class="col-md-6 col-md-offset-3 fon text-center">
        <h4>Введите шифруемое число:</h4>
        <form action="index.php" method="post">
            <input type="number" name="numb">
            <br>
            <input class="marg-top10 btn btn-success btn-color" type="submit" name="otp">
        </form>
        <h3>Лог:</h3>
            <?php if (isset($_POST['otp'])){
                $number = $_POST['numb'];
                rsashifr::main($number);
            }?>
        <a href="index.php" class="marg-top10 btn btn-success btn-color marg-bot10" >Очистить лог</a>

    </div>
    </div>
</div>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>