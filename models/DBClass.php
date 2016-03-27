<?php

class DB
{
   private $host = 'localhost=127.0.0.1';
   private $dbname = 'mysql:dbname=TestDataBase';
   private $user = 'root';
   private $password = '';

   private $options = array (PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                             PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
   public $db;

   public function _construct ()
   {
       try {
          $this->db = new PDO ('mysql:host='. $this->host .';dbname='. $this->dbname,
                  $this->user,
                  $this->password,
                  $this->options
                  ) ;
          $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       }

       catch (PDOException $e)
       {
           echo 'ERROR: Not Connected to DB ' . $e->getMessage();
       }
   }



   function db_query ($query) {

          // mySQL
          if($this->db_type == 1) {
              $result = mysql_query($query, $this->dbh)
                  or die ("Error: A problem was encountered while executing this query.");

              return $result;
          }
          //end mySQL
      } //end db_query()








     function db_numrows ($result) {

         switch($this->db_type) {
             case 1: //mySQL
                 return mysql_num_rows($result);

         } //end switch
     } // end db_numrows()

     function db_fetch_array (&$result) {

         switch($this->db_type) {
             case 1: //mySQL
                 return mysql_fetch_array($result);
         } //end switch
     } //end db_fetch_array() 

}
