<?php
//require_once(__DIR__.'/../models/WorkWithUser_Class.php');

//require_once(__DIR__.'/../views/signin.php');
//require_once(__DIR__.'/../index.php');
//helloAction();
require_once(__DIR__.'/../models/User.php');
class SignupController
{

  public function actionRegistration()
  {
    echo "SignupController actionRegistration";
    $u = new User();
    $u->firstname = '2';
    $u->lastName ='2';
    $u->surname ='2';
    $u->login ='1@gmail.com';
    $u->password ='2';
    $u->gender ='male';


    $result =$u->userToDB();
    if (  $result)
    {
      //successfully
      echo " <br> successfully <br>";
    }else
    {
      //unsuccessfully
      echo " <br> unsuccessfully <br>";
    }

    return true;
  }


}




















/*function helloAction(){
    $u = new User();
    $u->firstname = $_POST['fname'];
    $u->lastName =$_POST['lname'];
    $u->surname =$_POST['surname'];
    $u->login =$_POST['login'];
    $u->password =$_POST['password'];
  //    $u->gender =$_POST['gender'];


    $uw = new WorkWithUser();
    echo "//" ;
    echo $u->login ;
    echo "//" ;


$res =    $uw->checkLoginExist($u->login);
echo $res ;

if($res==1)
{
  //внеси пользователя  в бд
  //$uw->RegisterNewUser($u);
  //отрисовать форму входа
   echo "to do";




 //return	index();
}
else {
  # code...
}
}*/
  //-- выдать инфу что такой уже есть и отрисовать форму регистрации

?>
