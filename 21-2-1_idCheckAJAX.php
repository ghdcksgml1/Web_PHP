<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>화면 전환 없이 아이디 중복 체크</title>
</head>

<body>
    <input type="text" name="userId" id="userId" placeholder="아이디 입력" />
    <input type="button" id="idCheckBtn" value="중복 확인" />
    <div id="idCheckComment"></div>

</body>

<script>
    const btn = document.querySelector('#idCheckBtn');
    btn.addEventListener('click', () => {
        const userid = document.querySelector('#userId').value;
        fetch('21-2-2_idCheck.php', {
            method: 'post',
            body: JSON.stringify({
                userId: userid
            })
        });
        fetch('21-2-2_idCheck.php').then(response => {
                return response.json();
            })
            .then(data => {
                if (data.result === 'good') {
                    document.querySelector('#idCheckComment').innerText = '중복 X';
                } else {
                    document.querySelector('#idCheckComment').innerText = '중복 O';
                }
            });
    });
</script>

</html>