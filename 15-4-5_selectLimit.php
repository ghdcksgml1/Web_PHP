<?php
include_once "./15-1_connetDB.php";

if (isset($_GET['page'])) {
    $page = (int) $_GET['page'];
} else {
    $page = 1;
}
echo $page;
$numView = 50;

$firstLimitValue = ($numView * $page) - $numView;

$sql = "SELECT * FROM myMember LIMIT {$firstLimitValue}, {$numView}";
$result = mysqli_query($db_con, $sql);
if ($result) {
    echo "Success!!";
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>고객 리스트</title>
    <style>
        table {
            font-size: 10px
        }
        .pages{
            clear:both;
            width:100%;
            margin-top: 1rem;
        }
        a{
            height:2rem;
            text-decoration: none;
            padding-left:1rem;
            padding-right:1rem;
            background:#64cbf9;
            color:white;
            margin:auto 0;
        }
    </style>
</head>

<body>
    <h3>고객 리스트</h3>
    <table width="100%" bgcolor="skyblue" cellspacing="1">
        <tr bgcolor="white" align="center">
            <td>번호</td>
            <td>ID</td>
            <td>이름</td>
            <td>이메일</td>
            <td>성별</td>
            <td>가입일</td>
        </tr>

        <?php
        for ($i = 0; $i < mysqli_num_rows($result); $i++) {
            $member = mysqli_fetch_array($result, MYSQLI_ASSOC);
        ?>
            <tr bgcolor="white" align="center">
                <td><?= $member['myMemberID'] ?></td>
                <td><?= $member['userID'] ?></td>
                <td><?= $member['name'] ?></td>
                <td><?= $member['email'] ?></td>
                <td><?= (($member['gender'] == 'w') ? '여성' : '남성') ?></td>
                <td><?= $member['regTime'] ?></td>
            </tr>
        <?php } ?>
    </table>
    <div class="pages">
        <a href="./15-4-5_selectLimit.php?page=<?= (($page - 1)==0)?$page:($page-1) ?>"><</a>
        <a href="./15-4-5_selectLimit.php?page=<?= ($page + 1) ?>">></a>
    </div>
</body>

</html>