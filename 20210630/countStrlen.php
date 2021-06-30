<?php
    $food = array('fruits' => array('orange', 'banana', 'apple'),'veggie' => array('carrot', 'collard', 'pea'));

    //재귀 count 수
    echo count($food,COUNT_RECURSIVE);
    //결과 : 8
    echo "<br><br>";
    //보통 count 수
    echo count($food);
    //결과 : 2
    echo "<br><br>";

    //문자열 길이 출력하기
    for ($i=0;$i<count($food['fruits']);$i++)
    {
        echo $food['fruits'][$i], " = ";
        echo strlen($food['fruits'][$i]);
        echo "<br>";
    }

    var_dump($food);
    printf("<pre><br>\r\n");
    $str_test = var_export($food, true);
    printf("<br>",$str_test);
    printf($str_test);

    printf("<br>\r\n");
    echo print_r($food);
    printf("/<pre><br>\r\n");

?>