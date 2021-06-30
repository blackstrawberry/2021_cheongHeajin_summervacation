<?php
    $Time = mktime(22,00,00,06,01,2021);// mktime(시,분,초,월,일,년);
    echo date($Time);
    echo "<br>";
    echo date("초 : s",$Time);
    echo "<br>";
    echo date("분 : i",$Time);
    echo "<br>";
    echo date("시 : H",$Time);
    echo "<br>";
    echo date("월 : m",$Time);
    echo "<br>";
    echo date("일 : d",$Time);
    echo "<br>";
    echo date("년 : Y",$Time);
?>