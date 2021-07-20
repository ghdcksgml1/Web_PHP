<?php
    $email = "ghdcksgml2@naver.com";
    $emailArray = explode("@",$email);

    echo "<pre>";
    var_dump($emailArray);

    echo "이메일의 호스트 출력 <br/>";
    echo $emailARray[1];
?>