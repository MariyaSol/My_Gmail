<?php

 function getID() { 
        $logged = $this->checkLogin(); 
        if($logged) { 
            $username = $this->getName(); 
            $query = "SELECT ID_Emails FROM Emails WHERE Topic='" . $Topic . "'"; 
            $result = $this->db->db_query($query); 
            $row = $this->db->db_fetch_array($result); 
            return $row['user_id']; 
        } else { 
            return 0; 
        } 
    } 
