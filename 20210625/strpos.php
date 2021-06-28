<?php
    $str = "jong7721@naver.com";
    echo strpos($str, "@");
    if(strpos($str, "@"))// 1 -> True, 0 -> False
    {
        echo "제대로 된 ID";
    }
    else
    {
        echo "ID 오류"
    }
?>