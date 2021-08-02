<?php
    include_once "./15-1_connetDB.php";

    $sql = "DELETE FROM myMember WHERE myMemberID = 2";
    $res = mysqli_query($db_con,$sql);

    if($res){
        echo "2번 회원의 정보가 삭제되었습니다.";
    }else{
        echo "삭제 실패";
    }
?>