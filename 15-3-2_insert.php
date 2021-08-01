<?php
    include_once "./15-1_connetDB.php";

    echo "<pre>";
    var_dump($_POST);

    if($_POST['userName'] == "" || $_POST['userName'] == null){
        echo "해당 값을 사용할 수 없습니다. 1";
        exit;
    }

    $userName = $_POST['userName'];
    $userName = trim($userName);
    $userName = $db_con->real_escape_string($userName);


    if($_POST['userId'] =="" || $_POST['userId']==null){
        echo "해당 값을 사용할 수 없습니다. 2";
        exit;
    }
    $userId = $_POST['userId'];
    $userId = strtolower(trim($userId));
    $userId = $db_con->real_escape_string($userId);

    if($_POST['userPw'] == "" || $_POST['userPw']==null){
        echo "해당 값을 사용할 수 없습니다. 3";
        exit;
    }
    $userPw = sha1("everdevel".$_POST[' userPw']);


    if($_POST['userGender'] =='m' || $_POST['userGender'] =='w'){
        $userGender = $_POST['userGender'];
        echo $userGender;
    }else{
        echo "해당 값을 사용할 수 없습니다. 4";
        exit;
    }

    $emailCheck = filter_var($_POST['userEmail'],FILTER_VALIDATE_EMAIL);
    if($emailCheck == false){
        echo "해당 값을 사용할 수 없습니다. 5";
        exit;
    }
    $email = $_POST['userEmail'];
    $phone = "010-0000-0000";
    $birthDay = $_POST['userBirth'];

    $sql = "INSERT INTO myMember(userId, name, password, phone, email, birthday, gender, regTime) VALUES";
    $sql .= "('{$userId}','{$userName}','{$userPw}','{$phone}','{$email}','{$birthDay}','{$userGender}',NOW())";
    $result = mysqli_query($db_con,$sql);
    if($result){
        echo "DB 입력 완료";
    }else{
        var_dump($sql);
        echo "<br/>";
        echo "DB 입력 실패";
    }
    mysqli_close($db_con);
?>