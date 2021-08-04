<?php
    $myTempFile = $_FILES['myImage']['tmp_name'];

    $fileTypeExtension = explode("/",$_FILES['myImage']['type']);

    $fileType = $fileTypeExtension[0];
    $extension = $fileTypeExtension[1];

    if($fileType == 'image'){
        if($extension == 'jpeg' || $extension == 'bmp' || $extension == 'gif' || $extension == 'png'){
            $myFile = "./{$_FILES['myImage']['name']}";
            $imageUpload = move_uploaded_file($myTempFile,$myFile);

            if($imageUpload == true){
                echo "파일이 정상적으로 업로드되었습니다.";
                echo "<img src='{$myFile}' width='200'/>";
            }else{
                echo '파일 업로드에 실패했습니다.';
            }
        }
    }
?>