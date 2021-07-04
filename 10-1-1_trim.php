<?php
    $str = "  안녕하세요  ";

    echo "trim( )을 사용하지 않은 경우 <br />";
    echo "|".$str."|";

    echo "<br/><br/>";

    echo "trim( )을 사용한 경우 <br/>";
    echo "|".trim($str)."|";
?>