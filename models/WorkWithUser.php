<?php

require 'DB.php';
class WorkWithUser extends DB {

    var $salt;
    public function WorkWithUser ()
    {

        //echo "  -constr-  ";
        parent::DB();

        $this->salt = 'a552avf1ss';
    }

    public  function RegisterNewUser($data)
    {
    $query = $this->db->prepare("INSERT users (Login_, firstName, lastName, surName, Password_, gender) VALUES (:login, :firstname, :lastName, :surName, :password, :gender)");
    return $query->execute(array(
                                    ':login'  => $data->login,
                                    ':firstname'  => $data->firstname,
                                    ':lastName' => $data->lastName,
                                    ':surName' => $data->surname,
                                    ':password' => md5($data->password),
                                    ':gender' => $data->gender));
    }



















        public function getByLogin($login)
        {
        $result = false;
        if($login) {
            $query = $this->db->prepare("SELECT firstName, lastName, middleName, gender FROM Users WHERE Login_ = :login");
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
