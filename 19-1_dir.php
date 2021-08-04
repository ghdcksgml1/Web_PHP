<?php
    $dir = "./images/";

    if(is_dir($dir)){
        $opendir = opendir($dir);
        if($opendir == true){
            while(($file = readdir($opendir))!=false){
                echo $file."<br/>";
            }
        }
        else{
            echo "해당 폴더를 열지 못했습니다.";
            exit;
        }
    }else{
        echo "해당 폴더가 없습니다.";
        exit;
    }
?>