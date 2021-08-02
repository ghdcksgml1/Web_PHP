<?php
    include_once "./15-1_connetDB.php";

    $familyName = array();

    $familyName = ['김','나','박','이'];

    $lastName = array();

    $lastName = ['미우','찬희','찬영','찬일','찬이','찬삼','찬사','찬오','찬육','찬칠','찬팔','찬구','찬십'];

    $gender = array();

    $gender = ['m','w'];

    $successCount = 0;

    $failCount = 0;

    for($i = 0; $i <= 500;$i++){
        $numRandomFN = rand(0,count($familyName) - 1);
        $numRandomLN = rand(0,count($lastName)-1);
        $userGender = $gender[rand(0,1)];
        $userPw = sha1("hawi39339393".rand(1,1000));
        $userName= $familyName[$numRandomFN].$lastName[$numRandomLN];
        $userId = "everdevel".rand(1,9999999);
        $email = "eve".rand(1,9999999)."@naver.com";
        $birthDay = rand(1999,2021).'-'.rand(01,12).'-'.rand(01,30);
        $phone = "010-".rand(0000,9999).'-'.rand(0000,9999);
        $sql = "INSERT INTO myMember(userId,name,password,phone,gender,birthDay,email,regTime) VALUES";
        $sql .= "('{$userId}', '{$userName}', '{$userPw}', '{$phone}', '{$userGender}', '{$birthDay}', '{$email}', NOW())";
        $res = mysqli_query($db_con,$sql);

        if($res){
            $successCount++;
        }else{
            $failCount++;
        }
    }

    echo "Success Input : ".$successCount."<br/>";
    echo "Fail Input : ".$failCount."<br/>";
?> 