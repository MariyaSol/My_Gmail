<?php
class SigninController
{

  public function actionAuthentication()
  {
    echo "SigninController actionAuthentication";
      require_once(__DIR__.'/../views/signin.php');
    return true;
  }


}



?>
