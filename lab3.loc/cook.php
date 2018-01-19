<?php
/**
 * Created by PhpStorm.
 * User: CarlSon-BC
 * Date: 15.01.2018
 * Time: 18:47
 */
session_start();
if (isset($_POST['otp1'])){
    $_SESSION['Num1']=$_POST['num1'];
    $_SESSION['Num2']=$_POST['num2'];
    $_SESSION['Num3']=$_POST['num3'];

    header('Location: /');
}

if (isset($_POST['otp2'])){
    $_SESSION['Num4']=$_POST['num4'];
    $_SESSION['Num5']=$_POST['num5'];
    $_SESSION['Num6']=$_POST['num6'];

    header('Location: /');
}

if (isset($_POST['otp3'])){
    $_SESSION['Num7']=$_POST['num7'];
    $_SESSION['Num8']=$_POST['num8'];

    header('Location: /');
}
