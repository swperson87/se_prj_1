<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 500px;
            }

            td {
                border: 1px solid #dddddd;
                padding: 8px;
            }
        </style>        
    </head>
    <body>
        <form action="event_join.php" method="post">
        <table>
            <tr>
                <th colspan="2">회원가입하기</th>     
                 
            </tr>
            <tr>
                <td><label for="id"> 아이디</label></td>      
                <td><input type="text" id="id" name="id"></td>                 
            </tr>
            <tr>
                <td><label for="pasword">  비밀번호</label></td>      
                <td><input type="password" id="password" name="password"></td>                 
            </tr>
            <tr>
                <td><label for="name">이름</label></td>      
                <td><input type="text" id="name" name="name"></td>                 
            </tr>
            <tr>
                <td><label for="birth"> 생년월일</label></td>      
                <td><input type="date" id="birth" min="1940-01-01" name="birth"></td>                 
            </tr>
            <tr>
                <td><label for="sex">성별</label></td>      
                <td>
                    <input type="radio" id="sex_m" name="sex" value="M"> 남자
                    <input type="radio" id="sex_f" name="sex" value="F"> 여자
                </td>                 
            </tr>            
            <tr>
                <td><label for="phone"> 휴대전화</label></td>      
                <td><input type="tel" id="phone" name="phone" placeholder="010-1234-1234"
                           pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}"></td>                 
            </tr>             
            <tr>
                <td colspan="2" align="center"> 
                        <input type="submit" value="회원가입">
                       </td>
            </tr>
        </table>
        </form>
    </body>
</html>
