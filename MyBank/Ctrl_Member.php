<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */
//include 'return_info.php';
include 'MemberDAO.php';

/**
 * Description of Ctrl_Member
 *
 * @author san
 */
class Ctrl_Member {
    //put your code here
    function join($id, $password, $name, $birth, $sex, $phone){
        
        // 가입 중복 유무 검사
        $member_Obj = new MemberDAO();
        $chk_id = $member_Obj->check_id($id) ;
        
        printf("%d", $chk_id);
        
                // 가입 중복 유무 검사
        //chk_id  = entity_Obj.check_id(id);
    }
        
        
        
      
        
} 
    
    

?>