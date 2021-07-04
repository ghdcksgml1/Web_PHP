<?php
    $sum = 0;

    $num = 1;

    while($num <= 10){
        $sum += $num;
        $num++;
    }
    
    echo "1부터 10까지의 누적합은 {$sum}입니다.";
?>