<?php
    $myTempFile = $_FILES['myImage']['tmp_name'];
    $fileTypeExtension = explode("/",$_FILES['myImage']['type']);

    $fileType = $fileTypeExtension[0];
    $extension = $fileTypeExtension[1];

    if($fileType == 'image'){
        if($extension == 'jpeg' || $extension == 'bmp' || $extension == 'gif' || $extension =='png'){
            $makingFileName = "myImage".time().rand(1,99999)."."."{$extension}";

            $myFile = "./images/{$makingFileName}";

            $dir = "./images/";

            if(is_dir($dir)){
                $opendir = opendir($dir);
                if($opendir == true){
                    $checkFile = true;
                    while(($readFile = readdir($opendir))!=false){
                        if($makingFileName == $readFile){
                            $checkFile = false;
                            echo "해당 파일명은 이미 사용되고 있습니다.";
                            break;
                        }
                    }
                    if($checkFile == true){
                        $imageUpload = move_uploaded_file($myTempFile,$myFile);
                        if($imageUpload == true){
                            echo '중복된 파일명이 없어 정상적으로 업로드 되었습니다.';
                            echo "<img src='{$myFile}' width='100'/>";
                        }else{
                            echo "파일 업로드에 실패했습니다.";
                        }
                    }
                }
                else{
                    echo "해당 폴더를 열지 못했습니다.";
                    exit;
                }
            }
        }else{
            echo "허용하는 확장자는 jpg, bmp, gif, png입니다.";
            exit;
        }
    }else{
        echo "이미지 파일이 아닙니다.";
        exit;
    }
?>