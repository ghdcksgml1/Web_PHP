<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>회원 이름 변경하기</title>
</head>
<body>
    <form name="update" method="post" action="15-5-2_update.php">
        <label for="memberID">회원번호</label>
        <input type="number" name="memberID" id="memberID">
        <label for="cn">변경이름</label>
        <input type="text" name="cn" id="cn" placeholder="이름 변경">
        <input type="submit" value="제출">
    </form>
</body>
</html>