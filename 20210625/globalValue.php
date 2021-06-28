<?php
    $num1;

    function global_test()
    {
        global $num1;
        $num1 = 20;
    }
    $num1 = 10;
    echo "호출 전 num = ",$num1,"<br>";
    global_test();
    echo "호출 후 num = ",$num1,"<br>";
    
?>