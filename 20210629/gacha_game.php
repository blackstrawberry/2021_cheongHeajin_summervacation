<?php
    ini_set('display_errors', '0');
    $num = $_GET["num"];
    $count = $_GET["count"]+$num;
    echo <<<_END
<html>
    <head>
        <meta charset="utf-8"/>
        <title>세븐나이츠2 뽑기 확률 체험</title>
    </head>

    <body>
        <h2> 일회 또는 10연속 뽑기를 선택</h2>
        <button onclick="window.location.href='gacha_game.php?num=1&&count=$count'">1회뽑기</button>
        <button onclick="window.location.href='gacha_game.php?num=10&&count=$count'">10회뽑기</button>
    </body>
</html>
_END;
    echo "<br>시도횟수 : ",$count;
    if($num == 1)
    {
        $select_num = rand(0, 100000)/1000;
        select_char($select_num);
    }
    else{
        for($i = 0; $i<$num; $i++)
        {
            $select_num = rand(0, 100000)/1000;
            select_char($select_num);
        }
    }

    function select_char($select_num)
    {
        if($select_num >= 0 && $select_num<= 10)
        {
            echo '<p style="color:black">90퍼센트<br></P>';
        }
        else if($select_num > 10 && $select_num<= 40)
        {
            echo '<p style="color:orange">30퍼센트</p>';
        }
        else if($select_num > 40 && $select_num<= 60)
        {
            echo '<p style="color:purple">20퍼센트</p>';
        }
        else if($select_num > 60 && $select_num<= 70)
        {
            echo '<p style="color:gray">10퍼센트</p>';
        }
        else if($select_num > 70 && $select_num<= 80)
        {
            echo '<p style="color:gray">10퍼센트</p>';
        }
        else if($select_num > 80 && $select_num<= 85)
        {
            echo '<p style="color:blue">5퍼센트</p>';
        }
        else if($select_num > 85 && $select_num<= 90)
        {
            echo '<p style="color:blue">5퍼센트</p>';
        }
        else if($select_num > 93 && $select_num<= 96)
        {
            echo '<p style="color:red">3퍼센트</p>';
        }
        else if($select_num > 96 && $select_num<= 99)
        {
            echo '<p style="color:red">3퍼센트</p>';
        }
        else
        {
            echo '<p style="color:green">1퍼센트 확률!!!</p>';
        }
    }
?>