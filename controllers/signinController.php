<?php
class SigninController
{

  public function actionGetform()
  {
    echo "SigninController actionGetform";
      require_once(__DIR__.'/../views/signin.php');
    return true;
  }
  public function actionAuthentication()
  {
    echo "SigninController actionAuthentication";
  //получить данные из формы
    require_once(__DIR__.'/../models/User.php');
      $u = new User();

       $u->login =$_POST['login'];
       $u->password =$_POST['pass'];
       //  echo "$login $pass ";
       //проверить есть ли такой юзер
    $user=   $u->login();
    if($user)
    {
    //echo "$user->id ";
    //echo "$user->firstname ";
    //echo "$user->lastName";
    //echo "$user->surname ";
    //echo "$user->login ";
    //echo "$user->password ";
    //echo "$user->gender ";
    //внести юзера  в сессию
    $_SESSION['UserID'] = $user->id;
    $_SESSION['login'] =$user->login;
    //зайти на Home
    require_once(__DIR__.'/../views/home.php');
}
else {
    //не позволить зайти  на Home
  echo "incorrect pass or login";
}

    return true;
  }

}



?>
