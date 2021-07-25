<?php
$dn_con = new mysqli("localhost", "root", "hks13579", "myfirstDB");

if (mysqli_connect_error()) {
    echo "tq";
} else {
    echo "DB 연결 실패";
}

    $userId = "miu0709";
    $name = "김미우";
    $userPw = "aldn";
    $phone = "010-1234-5678";
    $email = "kmu07@everdevel.com";
    $gender = "w";

    $sql = "INSERT INTO myMember(userId, name, password, phone, email, gender, regTime) VALUES";
    $sql .= "('{$userId}','{$name}','{$userPw}','{$phone}','{$email}','{$gender}',NOW())";
    echo "1";
    $result = $dn_con->query($sql);
echo "2";

    echo $sql;
    if($result){
        echo "데이터 입력 완료";
    }else{
        echo "데이터 입력 실패";
    }
?>