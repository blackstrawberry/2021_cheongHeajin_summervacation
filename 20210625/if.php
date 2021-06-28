<?php
    $str_1 = "sortword";
    $str_2 = "longlongwordword";

    function howlong($str)
    {
        if (strlen($str) <= 8)
        {
            echo "<br>It's Bad T.T<br>";
        }
        elseif (strlen($str) > 8)
        {
            echo "<br>It's Good!! ^^<br>";
        }
        else
        {
            echo "<br><br>Error!";
        }
    }

    echo "<br>";
    echo strlen($str_1);
    echo "<br>";
    echo howlong($str_1);
    echo howlong($str_2);

?>