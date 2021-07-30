# ⚽️ PHP_정리

🧑🏻‍💻 이 레퍼지토리는 **'웹코딩 시작하기'** 라는 책을 보며 PHP를 학습한 내용들을 기록한 레퍼지토리 입니다.
<br/><br/>

<img width="400" alt="스크린샷 2021-07-30 오후 8 17 41" src="https://user-images.githubusercontent.com/79779676/127645471-89cea5e5-e17a-48f4-b60c-38b741b6ca14.png">


<br/><br/>
# 🦄  목차


> 2. 출력문

```php
<?php
  echo "Hello World";
?>
```


##
> 4. 변수
```php
<?php
  $num = 1;
?>
```
##
> 5. 연산자

##




> 6. 배열
##

> 7. 데이터형
##

> 8. 조건문
##

> 9. 반복문
##

> 10. 함수


* 10-1. 텍스트 함수


    trim(), strtoupper(), strtolower(), strlen(),
    
    str_replace(), substr(), explode()


* 10-2. 시간 함수

    time(), date(), mktime()
    
##
> 11. 함수 만들기

```php
<?php
  function 함수명($parameter){
    // 명령문 작성
    return $para
  }
?>
```

##
> 12. POST와 GET
##

### GET방식
    
    파일이름) get.php
    
```php
<?php
  echo "GET type : ".$_GET['type']."<br/>";
  echo "GET mobile : ".$_GET['mobile']."<br/>"
?>
```

    // url=http://localhost/get.php?type=first&mobile=ok

    // 결과
    
    // GET type : first
    
    // GET mobile : ok
    
### POST방식

    파일이름) form.php
```html
<!doctype html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>POST</title>
  </head>
<body>
  <h1>로그인</h1>
  <form name="data method="post" action="post.php"/>
  <label for="email">email</label>
  <input type="email" name="email_post" id="email" placeholder="ID"/>
  <label for="password">password</label>
  <input type="password" name="password_post" id="password" placeholder="PW"/>
  <input type="submit" value="제출"/>
  </form>
</body>
</html>
```

<br/><br/>

    파일이름) post.php
```php
<?php
    echo "email : ".$_POST['email_post']."<br/>"; // input태그의 name을 '[ ]'에 입력
    echo "password : ".$_POST['password_post']."<br/>"; // input태그의 name을 '[ ]'에 입력
?>
```

> 13. 기능의 사물화 (객체)
##

```php
<?php
  class people{
    function __construct(){
      // 생성자
    }
    
    function __destruct(){
      // 이 사물이 요청받은 것을 모두 처리한 후 실행되는 코드
    }
  }
?>
```

> 14. 코드의 재활용

##
> 15. PHP와 MySQL의 연동


* 15-1. 데이터베이스 접속하기
* 15-2. 테이블에 데이터 입력하기
* 15-3. form 태그에 입려된 데이터를 테이블에 입력하기
* 15-4. 테이블의 데이터를 불러오기
* 15-5. 테이블의 데이터 수정하기
* 15-6. 테이블의 데이터 삭제하기
* 15-7. 서로 다른 테이블의 데이터 불러오기
##
> 16. 상수

##
> 17. 정규 표현식

##
> 18. 파일 업로드

##
> 19. 디렉터리 함수

##
> 20. 파일 함수


* 20-1. 파일 쓰기
* 20-2. 파일 읽기
##
> 21. Anchor 태그의 ping 속성과 AJAX


* 21-1. anchor 태그의 ping 속성
* 21-2. AJAX
##
> 22. 쿠키와 세션


* 22-1. 쿠키
* 22-2. 세션
  * 22-2-1. 세션 생성
  * 22-2-2. 세션 유지 시간 설정
  * 22-2-3. 세션 유지 시간 확인
  * 22-2-4. 특정 페이지만 세션 유지 시간 변경
  * 22-2-5. 세션 삭제
##
> 23. 객체지향 프로그래밍

##
<br/><br/><br/><br/><br/><br/><br/>
