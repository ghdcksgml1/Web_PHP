<?php
    $fileName = "devilCat.jpg";
    // php에서 -1은 제일 마지막 인덱스를 가리킨다.
    // devilCat.jpg에서  -4번째 위치하는
    // .부터 시작해서 4글자를 잘라내서 jpg가 변수 execute에 대입됨
    $execute = substr($fileName,-4,4);
    
    if($execute == '.jpg' || $execute == '.png' || $execute == '.bmp' 
    || $exectue == '.gif'){
        echo "업로드한 파일은 이미지 파일입니다.";
    }else{
        echo "업로드한 파일은 이미지 파일이 아닙니다.";
    }
    for($i=0;$i<strlen($fileName)-1;$i++){
        echo substr($fileName,$i,2)."<br/>";
    }
?>