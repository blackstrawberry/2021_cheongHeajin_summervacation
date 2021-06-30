<?php
    ini_set('data.timezone','asia/Seoul');
    echo "현재 시간은 ".date("Y년 m월 d일 H시 i분 s초",time());

    $start_Time = mktime(22,00,00,06,01,2021); // mktime(시,분,초,월,일,년);
    $end_Time = mktime(22,10,00,07,07,2021);
    echo "<br>";

    if($start_Time <= time() && $end_Time > time())
    {
        echo "블소 화룡 이벤트에 참여하세요!!";
    }
    else
    {
        echo "블소 화룡 이벤트 종료";

    }
    echo "<br>";

?>