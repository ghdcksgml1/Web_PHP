<?php
    $pattern = '/^(010|011|016|017|018|019)-[0-9]{3,4}-[0-9]{4}$/';

    $myPhone = "011-345-6789";

    if(preg_match($pattern, $myPhone,$matches)){
        echo "휴대폰 번호로 입력된 값 {$myPhone}는 유효성에 일치합니다.";
        echo "<pre";
        var_dump($matches);
    }else{
        echo "사용 불가한 번호입니다.";
    }
?>