<?php
    include_once "./15-1_connetDB.php";

    $sql = "SELECT m.name, m.gender, s.class, s.english, s.math";
    $sql .= "FROM myMember m JOIN schoolRecord s ON(m.myMemberID = s.studentID) ";
    $sql .= "WHERE m.myMemberID = 3";
    $res = mysqli_query($db_con,$sql);

    $data = mysqli_fetch_array($res,MYSQLI_ASSOC);

    echo $data['name'].$data['gender'].$data['class'];
?>