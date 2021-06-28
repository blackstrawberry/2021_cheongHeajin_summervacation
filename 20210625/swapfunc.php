<?php
    $num1 = 10;
    $num2 = 20;

    function swaping($num1,$num2)
    {
        global $num1;
        global $num2;
        $tmp = $num2;
        $num2 = $num1;
        $num1 = $tmp;
    }
    echo "바꾸기 전 : num1 = ",$num1,", num2 = ",$num2, "<br><br>";
    swaping($num1, $num2);
    echo "바꾼 후 : num1 = ",$num1,", num2 = ",$num2;
    
?>