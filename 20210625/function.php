<?php
    echo "<br>";
    echo "<br>";
    // 간단한 함수 사용법
    function longdate($timestamp)
    {
        return date("l F jS Y", $timestamp);
    }

    echo longdate(time());
    echo "<br>";
    echo time();
    
?>