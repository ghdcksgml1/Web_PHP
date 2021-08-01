<?php
    include_once '15-1_connetDB.php';

    $userId = "miu0709";
    $name = "김미우";
    $userPw = "aldn";
    $phone = "010-1234-5678";
    $email = "kmu07@everdevel.com";
    $birthDay = "0925";
    $gender = "w";

    $sql = "INSERT INTO myMember(userId, name, password, phone, email, birthday, gender, regTime) VALUES";
    $sql .= "('{$userId}','{$name}','{$userPw}','{$phone}','{$email}','{$birthDay}','{$gender}',NOW())";
    
    $result = mysqli_query($db_con,$sql);

    if($result){
        echo "insert 완료";
    }else{
        echo "insert 실패";
    }

    mysqli_close($db_con);


?>