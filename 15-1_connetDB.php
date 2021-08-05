<?php
    $db_con = mysqli_connect("localhost:3306", "root", "1234","myfirstDB");
    if ($db_con){
    echo "DB 연결 성공<p>";
    } else {
    echo "DB 연결 실패<p>";
    }
    
    
?>
