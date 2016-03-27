<?php

require 'DBClass.php';
class WorkWithUser extends DB {

    var $db;
    var $salt;


    public function WorkWithUser ()
    {

      echo "constr  ";
        $this->db = new DB();
        $this->salt = 'a552avf1ss';
    }


        public function getByLogin($login)
        {
        $result = false;
        if($login) {
            $query = $this->db->prepare("SELECT firstName, lastName, middleName, gender FROM Users WHERE login = :Login_");
            $query->execute(array('login' => $login));
            $result = $query->fetch();
        }
        return  $result;
        }


        function getID() {
        $logged = $this->checkLogin();
        if($logged) {
            $Login = $this->getName();
            $query = "SELECT ID_User FROM Users WHERE login='" . $Login_ . "'";
            $result = $this->db->db_query($query);
            $row = $this->db->db_fetch_array($result);
            return $row['ID_User'];
        } else {
            return 0;
        }
    }





        public function RegisterNewUser($data)
        {
        $query = $this->db->prepare("INSERT users (login, firstName, lastName, surName, password, gender) VALUES (:Login_, :FirstName, :LastName, :SurName, :Password, :Gender)");
        return $query->execute(array(
                                        'login'  => $data->login,
                                        'firstname'  => $data->firstname,
                                        'lastName' => $data->lastName,
                                        'surName' => $data->surname,
                                        'gender' => $data->gender,
                                        'password' => md5($data->password)));
    }


    public function login($login, $password) {

        $query = "SELECT Login_ FROM Users WHERE login = '" . $Login_ . "' AND password = '" . crypt($Password_, $this->salt) . "'";
        $result = $this->db->db_query($query);
        if($this->db->db_numrows($result) > 0) {
            $secret = crypt($Login_,$this->salt);
//            setcookie("mysite", "$login:$secret");
            return 1;
        } else {
            return 0;
        }
    }


    function checkLoginExist($login) {

        echo "checkLoginExist";
        $query = "SELECT * FROM Users where login='" . $Login_ ."'";
        $result = $this->db->db_query($query);
        if($this->db->db_numrows($result) > 0) {
            return 0;
        } else {
            return 1;
        }
    }

     function checkLogin() {
        global $HTTP_COOKIE_VARS;

        $array = explode(":", $HTTP_COOKIE_VARS['mysite']);
        if(crypt($array[0], $this->salt) == $array[1]) {
            return 1;
        } else {
            return 0;
        }
    } //end checkLogin()


     function createUser($login,$password,$firstname, $lastname, $middlename,$gender) {
        srand(make_seed());
        $randval = rand();
        $query = "INSERT authorize(login,password,firstname,lastname,middlename, gender,id) VALUES ('" . $Login_ . "','" . crypt($Password_,$this->salt) . "',0,'" . $Firstname ."','" . $LastName ."','" . $MiddleName ."','" . $gender ."', '" . $randval . "')";
        $result = $this->db->db_query($query);
    }




}
