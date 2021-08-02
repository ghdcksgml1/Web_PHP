<?php
    include_once "./15-1_connetDB.php";

    $myMemberID = (int) $_POST['memberID'];

    if($myMemberID == 0){
        echo "값이 유효하지 않습니다.";
        exit;
    }

    if($_POST['cn'] =="" || $_POST['cn']==null){
        echo "값이 유효하지 않습니다.";
        exit;
    }else{
        $cn = mysqli_real_escape_string($db_con,$_POST['cn']);
    }

    $sql = "UPDATE myMember SET name = '{$cn}' WHERE myMemberID = {$myMemberID}";
    $res = mysqli_query($db_con,$sql);

    if($res){
        echo "회원번호 {$myMemberID}의 이름이 {$cn}으로 변경되었습니다.";
    }else{
        echo "이름 변경 실패";
    }
?>