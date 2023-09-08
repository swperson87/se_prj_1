<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of MemberDAO
 *
 * @author san
 */

include 'Db_Info.php';
//include 'return_info.php';

class MemberDAO {
    //put your code here
    
    function getConnection() {
//        $conn = new mysqli(DB_URL, DB_USER, DB_PASSWORD, DB_NAME);
        $conn = new mysqli('127.0.0.1', 'bank', 'bank1234', 'bank');        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }

    function closeAll($rs, $pstmt, $conn){
        if ($rs != null) {
            $rs->close();
        }
        if ($pstmt != null) {
            $pstmt->close();
        }
        if ($conn != null) {
            $conn->close();
        }    
            
    }
    
    
    function check_id($id){
       $conn = null;
       $pstmt = null;
       $rs = null;
        
       $conn = $this->getConnection();
       
      $sql = "SELECT * FROM member where id=?";        
      $pstmt = $conn->prepare($sql);
      $pstmt->bind_param("s",$id);
      $pstmt->execute();
      $rs = $pstmt->get_result();
      if( ($row_no = $rs->num_rows) >= 1){         
          $result = true;       
      } else {
          $result = false;                      
      }       
       $this->closeAll($rs, $pstmt, $conn);
     
       return $result;
    }
    
  
    
}
?>