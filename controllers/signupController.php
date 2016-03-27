<?php
require '../models/WorkWithUser.Class.php';
require '../models/User.Class.php';
  //обращение  к бд для проверки есть ли такой юзер

    $u = new User();
    $u->firstname = $_POST['fname'];
    $u->lastName =$_POST['lname'];
    $u->surname =$_POST['surname'];
    $u->login =$_POST['login'];
    $u->password =$_POST['password'];
    //$u->password =$_POST['password'];
    //,,,,,  код внесения

    $uw = new WorkWithUser();

$res =    $uw->checkLoginExist($u->login);
echo $res ;
    //  echo  signInForm();//показать форму входа



  //-- выдать инфу что такой уже есть и отрисовать форму регистрации
    //$_SESSION['IsUser'] = true;
    //$_SESSION['login'] = $_GET['login'];
    //$_SESSION['password'] = $_GET['password'];

    //echo("login: " . $_SESSION['login'] . "<br>");
    //echo("pass: " . $_SESSION['password'] . "<br>");

?>
