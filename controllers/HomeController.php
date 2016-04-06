<?php
class HomeController
{

  public function actionIndex()
  {
    echo "HomeController actionIndex";
  //  print_r ($_POST['exit']);
    if( $_POST['exit']!=null  && $_POST['exit'] == true)
    {

        $_SESSION=array();
        session_destroy();
        require_once(__DIR__.'/../views/signin.php');
      $aboutSuccess = "";// непр ввод логина или пароля
      $signInView  =new Signin($aboutSuccess);
    }

    return true;
  }
  public function actionMessage()
  {
      echo "HomeController actionMessage";
    return true;
  }
}



?>
