<?php
require_once 'shifrator.php';
require_once 'analysis.php';
require_once 'deshifrator.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Labs DB</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">


</head>
<body>
<nav class="navbar">
    <h2 class="text-center">Защита инф систем Кагерманов Шамильхан ИВБО-4-14</h2>
</nav>
<div id="start_inf">Шифрование и дешифрование с помощью <u>частотного анализа</u></div>
<div class="container marg_top" >
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form class="form-horizontal" action="index.php" method="post">
                <div class="form-group">
                    <p>Введите текст:</p>
                    <textarea class="form-control" rows="10" name="text"></textarea>
                    <div class="col-md-2 col-md-offset-5 marg_top">
                        <input class="btn-primary" type="submit" name="otpr" value="Зашифровать">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form class="form-horizontal" action="index.php" method="post">
                <div class="form-group">
                    <p>Ваш результат:</p>
                    <textarea class="form-control" rows="10" name="text">
                        <?php
                        if (isset($_POST['otpr'])){
                            $text = $_POST['text'];
                            $lol = shifrator::shifrirovanie($text);// Здесь наш зашифрованный текст
                            echo $lol;
                            analysis::analysator($text); // Анализируем свойства оригинального текста для дальнейшей дешифрации
                        }
                        ?>
                    </textarea>
                </div>

            </form>
        </div>
    </div>
</div>

<div class="container marg_top">
       <div class="row">
           <div class="col-md-6 col-md-offset-3">
               <form class="form-horizontal" action="index.php" method="post">
                   <div class="form-group">
                        <p>Введите текст:</p>
                        <textarea class="form-control" rows="10" name="text1"></textarea>
                        <div class="col-md-2 col-md-offset-5 marg_top">
                            <input class="btn btn-danger" type="submit" name="otpr1" value="Расшифровать">
                        </div>
                    </div>

                </form>
            </div>
        </div>
</div>
<div CLASS="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form class="form-horizontal" action="index.php" method="post">
                    <div class="form-group">
                        <p>Ваш результат:</p>
                        <textarea class="form-control" rows="10" name="text">
                        <?php
                        if (isset($_POST['otpr1'])){
                            $text1 = $_POST['text1'];
                            deshifrator::deshifrirovanie($text1);
                        }
                        ?>
                    </textarea>
                    </div>

                </form>
            </div>
        </div>
</div>


<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>