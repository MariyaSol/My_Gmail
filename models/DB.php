<?php

class DB
{
   //private $host = 'localhost=127.0.0.1';
  // private $host = 'http://127.0.0.1:1919/';
  private $host = 'localhost';
   private $dbname = 'My_Gmail';
   private $user = 'root';
   private $password = '';

   private $options = array (PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                             PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
   public $db;

   public function DB()
   {
     //echo "DB_construct";
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
  public function db_query ($query) {
//echo " -db_query-  ";
          // mySQL
        //  if($this->db_type == 1) {
            //  $result = mysql_query($query, $this->dbh)
              //    or die ("Error: A problem was encountered while executing this query.");

         $result = $this->db->query($query);
              return $result;
          //}
          //end mySQL
      } //end db_query()


  public   function db_numrows ($result) {
//echo "db_numrows  ";
         //switch($this->db_type) {
          //   case 1: //mySQL

                // return mysql_num_rows($result);
              return  $result->fetchColumn();
        // } //end switch
     } // end db_numrows()














     function db_fetch_array (&$result) {

         switch($this->db_type) {
             case 1: //mySQL
                 return mysql_fetch_array($result);
         } //end switch
     } //end db_fetch_array()

}
