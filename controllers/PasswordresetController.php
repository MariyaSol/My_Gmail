<?php
class PasswordresetController
{

  public function actionIndex()
  {
    echo "PasswordresetController actionIndex";
  //$_POST['login'];
  //$_POST['password'];
  /*$headers = 'From: mariyamailbox@mail.ru' . "\r\n" .  'Reply-To: mariyasolomakha@gmail.com';
  //to
  $text= "Line 1\nLine 2\nLine 3";
  $text = str_replace("\n.", "\n..", $text);
  //ky4erenko_gm_master@outlook.com
  //mariyamailbox@mail.ru
  $aboutSuccess =  mail("mariyasolomakha@gmail.com", "My Subject",$text,$headers);*/


$to = "mariyamailbox@mail.ru";
$subject = "восстановление пароля";
$txt ="Ваш логин:" $_POST['login']."\r\n Ваш пароль:". $_POST['password'];
$headers = "From: mariyasolomakha@gmail.com" . "\r\n" .
"CC: mariyamailbox@mail.ru";


require_once(__DIR__.'/../views/signin.php');

$aboutSuccess = mail($to,$subject,$txt,$headers);
if ($aboutSuccess) {
    $aboutSuccess = "пароль выслан на ваш почту";
} else {
    $aboutSuccess = "не удалось выслать пароль";
}
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
