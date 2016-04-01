<?php
class PasswordresetController
{

  public function actionIndex()
  {
    echo "PasswordresetController actionIndex";
  $_POST['login'];
  $_POST['password'];



  $headers = 'From: mariyamailbox@mail.ru' . "\r\n" .  'Reply-To: ky4erenko_gm_master@outlook.com';
  //to
  $text= "Line 1\nLine 2\nLine 3";
  $text = str_replace("\n.", "\n..", $text);

  //mariyamailbox@mail.ru
  $aboutSuccess =  mail("ky4erenko_gm_master@outlook.com", "My Subject",$text,$headers);
  //выслать на почту
          require_once(__DIR__.'/../views/signin.php');

          $signInView  =new Signin($aboutSuccess);

    return true;
  }
  public function actionGetform()
  {
    echo "PasswordresetController actionGetform";

          require_once(__DIR__.'/../views/passwordReset.php');
          $stringInfo = '';
      $passResetView =   new Resetpass($stringInfo);
    return true;
  }
}



?>
