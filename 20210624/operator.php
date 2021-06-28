<?php
    // 연산자(operator) 연습
    $j = 10;

    echo $j + 1;
    echo "<br>";
    echo $j - 2;
    echo "<br>";
    echo $j * 3;
    echo "<br>";
    echo $j / 2;
    echo "<br>";
    echo $j % 3;
    echo "<br>";
    echo --$j; // -1 뺀 값을 저장
    echo "<br>";
    echo $j; // -1 된게 저장되어있어서 9 출력
    echo "<br>";
    echo ++$j; // +1 해서 다시 10으로 복귀

    $user_input = 10000;
    $item_price = 7300;
    $change_money_1000 = floor(($user_input-$item_price)/1000);
    $change_money_500 = floor(($user_input-$item_price-($change_money_1000*1000))/500);
    $change_money_100 = floor(((($user_input-$item_price)-($change_money_1000*1000))-($change_money_500*500))/100);
    echo "<br>";
    echo "거스름돈 총계 : ", ($user_input - $item_price),"원<br>";
    echo "1000원 : ", $change_money_1000, "장<br>";
    echo "500원 : ", $change_money_500, "개<br>";
    echo "100원 : ", $change_money_100, "개<br>";

?>