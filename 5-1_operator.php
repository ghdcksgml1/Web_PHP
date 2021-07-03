<?php
    $num1 = 20;
    $num2 = 3;

    echo "변수 \$num1의 값은 {$num1}이고, 변수 \$num2의 값은 {$num2}입니다. <br/>";

    $plus = $num1+$num2;
    $minus = $num1-$num2;
    $mul = $num1 * $num2;
    $division = $num1 / $num2;
    $rest = $num1 % $num2;

    echo "{$num1} 더하기 {$num2}는 ".$plus."입니다.<br/>";
    echo "{$num1} 빼기 {$num2}는 ".$minus."입니다.<br/>";
    echo "{$num1} 곱하기 {$num2}는 ".$mul."입니다.<br/>";
    echo "{$num1} 나누기 {$num2}는 ".$division."입니다.<br/>";
    echo "{$num1} 나누기 {$num2}의 나머지 값은 ".$rest."입니다.<br/>";
?>