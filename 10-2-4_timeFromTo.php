<?php
    ini_set('data.timezone','Asia/Seoul');

    $startTime = mktime(22,46,0,7,20,2021);
    $endTime = mktime(23,0,0,7,20,2021);

    if($startTime <= time() && $endTime >time()){
        echo "이벤트에 참여하세요.";
    }else{
        echo "이벤트 시작 전이거나 종료되었습니다.";
    }
?>