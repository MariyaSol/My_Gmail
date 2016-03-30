<?php
require_once(__DIR__.'/WorkWithUser.php');
class User
{
    var $id;
    var $firstname;
    var $lastname;
    var $surname;
    var $login;
    var $password;
    var $gender;
    var $userManager;
public function User()
{
  echo "User() ";
  //$this->userManager=new WorkWithUser();
}
public static function getUserItemById()
{

}
private  function isUniqueLogin()
{
   $this->userManager=new WorkWithUser();
   if($this->userManager->isLoginExist($this->login))
   {
      return 0;
   }
   else {
      return 1;
   }


}
public  function userToDB()
{
  if(  $this->isUniqueLogin()  ){
      //data to db

      $this->userManager->RegisterNewUser($this);
      return true;
  }
  return false;
}


public  function login()
{

    //echo $this->login ;
    //echo $this->password ;

    $this->userManager=new WorkWithUser();
  return    $this->userManager->loginUser($this);
  

}
}
