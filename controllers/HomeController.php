<?php
class HomeController
{

  public function actionIndex()
  {
    echo "HomeController actionIndex";
    print_r ($_POST['exit']);
    if($_POST['exit'] == true)
    {

        $_SESSION=array();
        session_destroy();
        require_once(__DIR__.'/../views/signin.php');
    }

    return true;
  }

}



?>
