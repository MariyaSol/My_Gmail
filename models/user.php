<?php
class User
{

    public $id = -1;
    public $name = '';
    public $lastName = '';
    public $surname = '';
    public $login = '';
    public $password = '';
    public $gender = '';




    public static function toFile($u) {
        $handle = fopen("D:\\resource.txt", "at");

       $serial_user = serialize($u);
       fwrite($handle, $serial_user);
        fwrite($handle, '\n');
       fclose($handle);

    }
    public static function isExsists($l,$p) {

    }

}

?>
