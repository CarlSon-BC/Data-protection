<?php
require 'shifrator.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shifr Vernama</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
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
<div id="start_inf">Шифрование c помощью <u>Шифра Вернама</u></div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-6 marg_top">
                <form class="form-horizontal" action="index.php" method="post">
                    <div class="form-group">
                        <textarea class="form-control" name="text" placeholder="Введите шифруемый текст" rows="10"></textarea>
                        <div class="col-md-4 col-md-offset-4 marg_top">
                            <input name="otp" type="submit" value="Зашифровать" class="btn btn-info">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6 marg_top">
                <form class="form-horizontal">
                    <div class="form-group">
                        <textarea class="form-control" rows="10">
                            <?php if (isset($_POST['otp'])){
                        $text = $_POST['text'];
                        echo shifrator::shifrirovanie($text);
                            }
                             ?>
                        </textarea>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>