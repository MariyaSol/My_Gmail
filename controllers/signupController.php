<?php
//require_once(__DIR__.'/../models/WorkWithUser_Class.php');

//require_once(__DIR__.'/../views/signin.php');
//require_once(__DIR__.'/../index.php');
//helloAction();

class SignupController
{
public function actionGetform()
{
  echo "SignupController actionRegistration ";
  require_once(__DIR__.'/../views/registration.php');
}
  public function actionRegistration($params)//избыточный параметр
  {
    echo "SignupController actionRegistration ";
    require_once(__DIR__.'/../models/User.php');
     $u = new User();
      $u->firstname = '2';
      $u->lastName ='2';
      $u->surname ='2';
      $u->login ='1@gmail.com';
      $u->password ='2';
      $u->gender ='male';


      $result =$u->userToDB();
      //if (  $result)
      if (  $result)
      {
        //successfully
        echo " <br> successfully <br>";
        //отрисовать форму входа
        //echo enter();
         require_once(__DIR__.'/../views/signin.php');
      }else
      {
        //unsuccessfully
        echo " <br> unsuccessfully <br>";
        //указать на ошибки пользователю
      }
    /*if($params){
            if($params[0] == 'form')
            {
              //  require_once(__DIR__.'/../views/registration.php');
                //echo  __DIR__.'/../views/registration.php' ;
                echo  'require_once' ;
            }
            else if($params[0] == 'data') {
              echo "eclse1";
            }
    }
    else {
    //  echo "eclse2";
  }*/
  /*
  */

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
