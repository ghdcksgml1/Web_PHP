# ๐ง๐ปโ๐ป PHP_์ ๋ฆฌ

๐ง๐ปโ๐ป ์ด ๋ ํผ์งํ ๋ฆฌ๋ **'์น์ฝ๋ฉ ์์ํ๊ธฐ'** ๋ผ๋ ์ฑ์ ๋ณด๋ฉฐ PHP๋ฅผ ํ์ตํ ๋ด์ฉ๋ค์ ๊ธฐ๋กํ ๋ ํผ์งํ ๋ฆฌ ์๋๋ค.
<br/><br/>

<img width="400" alt="แแณแแณแแตแซแแฃแบ 2021-07-30 แแฉแแฎ 8 17 41" src="https://user-images.githubusercontent.com/79779676/127645471-89cea5e5-e17a-48f4-b60c-38b741b6ca14.png">


<br/><br/>
# ๐ฆ  ๋ชฉ์ฐจ


> 2. ์ถ๋ ฅ๋ฌธ

```php
<?php
  echo "Hello World";
?>
```


##
> 4. ๋ณ์
```php
<?php
  $num = 1;
?>
```
##
> 5. ์ฐ์ฐ์

##




> 6. ๋ฐฐ์ด
##

> 7. ๋ฐ์ดํฐํ
##

> 8. ์กฐ๊ฑด๋ฌธ
##

> 9. ๋ฐ๋ณต๋ฌธ
##

> 10. ํจ์


* 10-1. ํ์คํธ ํจ์


    trim(), strtoupper(), strtolower(), strlen(),
    
    str_replace(), substr(), explode()


* 10-2. ์๊ฐ ํจ์

    time(), date(), mktime()
    
##
> 11. ํจ์ ๋ง๋ค๊ธฐ

```php
<?php
  function ํจ์๋ช($parameter){
    // ๋ช๋ น๋ฌธ ์์ฑ
    return $para
  }
?>
```

##
> 12. POST์ GET
##

### GET๋ฐฉ์
    
    ํ์ผ์ด๋ฆ) get.php
    
```php
<?php
  echo "GET type : ".$_GET['type']."<br/>";
  echo "GET mobile : ".$_GET['mobile']."<br/>"
?>
```

    // url=http://localhost/get.php?type=first&mobile=ok

    // ๊ฒฐ๊ณผ
    
    // GET type : first
    
    // GET mobile : ok
    
### POST๋ฐฉ์

    ํ์ผ์ด๋ฆ) form.php
```html
<!doctype html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>POST</title>
  </head>
<body>
  <h1>๋ก๊ทธ์ธ</h1>
  <form name="data method="post" action="post.php"/>
  <label for="email">email</label>
  <input type="email" name="email_post" id="email" placeholder="ID"/>
  <label for="password">password</label>
  <input type="password" name="password_post" id="password" placeholder="PW"/>
  <input type="submit" value="์ ์ถ"/>
  </form>
</body>
</html>
```

<br/><br/>

    ํ์ผ์ด๋ฆ) post.php
```php
<?php
    echo "email : ".$_POST['email_post']."<br/>"; // inputํ๊ทธ์ name์ '[ ]'์ ์๋ ฅ
    echo "password : ".$_POST['password_post']."<br/>"; // inputํ๊ทธ์ name์ '[ ]'์ ์๋ ฅ
?>
```

> 13. ๊ธฐ๋ฅ์ ์ฌ๋ฌผํ (๊ฐ์ฒด)
##

```php
<?php
  class people{
    function __construct(){
      // ์์ฑ์
    }
    
    function __destruct(){
      // ์ด ์ฌ๋ฌผ์ด ์์ฒญ๋ฐ์ ๊ฒ์ ๋ชจ๋ ์ฒ๋ฆฌํ ํ ์คํ๋๋ ์ฝ๋
    }
  }
?>
```

> 14. ์ฝ๋์ ์ฌํ์ฉ

##
> 15. PHP์ MySQL์ ์ฐ๋


* 15-1. ๋ฐ์ดํฐ๋ฒ ์ด์ค ์ ์ํ๊ธฐ
* 15-2. ํ์ด๋ธ์ ๋ฐ์ดํฐ ์๋ ฅํ๊ธฐ
* 15-3. form ํ๊ทธ์ ์๋ ค๋ ๋ฐ์ดํฐ๋ฅผ ํ์ด๋ธ์ ์๋ ฅํ๊ธฐ
* 15-4. ํ์ด๋ธ์ ๋ฐ์ดํฐ๋ฅผ ๋ถ๋ฌ์ค๊ธฐ
* 15-5. ํ์ด๋ธ์ ๋ฐ์ดํฐ ์์ ํ๊ธฐ
* 15-6. ํ์ด๋ธ์ ๋ฐ์ดํฐ ์ญ์ ํ๊ธฐ
* 15-7. ์๋ก ๋ค๋ฅธ ํ์ด๋ธ์ ๋ฐ์ดํฐ ๋ถ๋ฌ์ค๊ธฐ
##
> 16. ์์

##

    define("์์๋ช","์์๊ฐ");


> 17. ์ ๊ท ํํ์

##
> 18. ํ์ผ ์๋ก๋

##
> 19. ๋๋ ํฐ๋ฆฌ ํจ์

##
> 20. ํ์ผ ํจ์


* 20-1. ํ์ผ ์ฐ๊ธฐ
* 20-2. ํ์ผ ์ฝ๊ธฐ
##
> 21. Anchor ํ๊ทธ์ ping ์์ฑ๊ณผ AJAX


* 21-1. anchor ํ๊ทธ์ ping ์์ฑ
* 21-2. AJAX
##
> 22. ์ฟ ํค์ ์ธ์


* 22-1. ์ฟ ํค
* 22-2. ์ธ์
  * 22-2-1. ์ธ์ ์์ฑ
  * 22-2-2. ์ธ์ ์ ์ง ์๊ฐ ์ค์ 
  * 22-2-3. ์ธ์ ์ ์ง ์๊ฐ ํ์ธ
  * 22-2-4. ํน์  ํ์ด์ง๋ง ์ธ์ ์ ์ง ์๊ฐ ๋ณ๊ฒฝ
  * 22-2-5. ์ธ์ ์ญ์ 
##
> 23. ๊ฐ์ฒด์งํฅ ํ๋ก๊ทธ๋๋ฐ

##
<br/><br/><br/><br/><br/><br/><br/>
