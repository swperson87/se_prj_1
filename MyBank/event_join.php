<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->


<?php

include 'Ctrl_Member.php';
// put your code here
// 웹페이지로부터 데이터 입력받기
/*
 *      String id;          //  아이디
        String password;     // 패스워드
        String name;        // 이름      
        Date birth;          // 생년월일
        char sex;            // 성별
        String phone;
 */
//  데이터 입력받기
$id = $_POST["id"];
$password = $_POST["password"];
$name =  $_POST["name"];
$birth =  $_POST["birth"];
$sex =  $_POST["sex"];
$phone =  $_POST["phone"];    

//  가입하기
$ctrl_Obj = new Ctrl_Member();
$ctrl_Obj->join($id, $password, $name, $birth, $sex, $phone);

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    
    <body>
        아이디 : <?=$id?><br>
        패스워드 : <?=$password?><br>    
        이름 : <?=$name?><br>
        생년월일 : <?=$birth?><br>
        성별 : <?=$sex?><br>
        전화번호 : <?=$phone?><br>        
    </body>
</html>
