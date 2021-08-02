<?php
    include_once "./15-1_connetDB.php";

    $sql = "SELECT name, userId FROM myMember ORDER BY name ASC";
    $result = mysqli_query($db_con, $sql);

    $numResult = mysqli_num_rows($result);
    if($numResult !=0){
        for($i = 0;$i<$numResult;$i++){
            $memberInfo = mysqli_fetch_array($result,MYSQLI_ASSOC);
            echo ($i+1)."번   회원이름 : ".$memberInfo['name'].", 회원 ID : ".$memberInfo['userId']."<br/>";
        }
    }else{
        echo '데이터가 없습니다.';
    }
?>