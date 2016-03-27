<?php
class Email
{

    public $id = -1;
    public $topic = '';
    public $content = '';
    public $owner = '';
    public $type = '';
    public $dethTime = '';
    public $createDate = '';




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
