<?php
    $pattern = '/^[가-힣]+$/';

    $myName = '홍찬희';

    if(preg_match($pattern,$myName,$matches)){
        echo "값 {$myName}은 정규식 표현에 적합한 값입니다.";
        echo "<pre>";
        var_dump($matches);
    }else{
        echo "이름에 특수 문자, 영문 또는 숫자가 있는지 확인 요망";
    }
?>