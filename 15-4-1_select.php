<?php
    include_once "./15-1_connetDB.php";

    $myMemberID = 1;
    $sql = "SELECT * FROM myMember WHERE myMemberID = {$myMemberID}";
    $result = mysqli_query($db_con,$sql);
    
    $memberInfo = mysqli_fetch_array($result,MYSQLI_ASSOC);

    echo "<pre>";
    var_dump($memberInfo);

    echo "회원번호가 {$myMemberID}번인 회원의 이름은 ".$memberInfo['name'];
?>