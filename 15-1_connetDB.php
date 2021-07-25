<?php
    $dn_con = new mysqli("localhost","root","hks13579","myMember");

    if($dn_con){
        echo "DB 연결 성공";
    }else{
        echo "DB 연결 실패";
    }
?>