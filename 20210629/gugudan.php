<?php
    //Make a gugudan
    $i = 2;
    $j = 1;
    for ($i;$i<10;$i++)
    {
        echo "<h1>",$i,"단<br></h1>";
        for ($j;$j<10;$j++)
        {
            echo "<h1>",$i," X ",$j," = ",$i*$j,"<br></h1>";
        }
        $j = 1;
        echo "<br>";
    }

    // $i=0;
    // $j=0;
    // while ($i<4)
    // {   
    //     echo "<h1>",$i+2,"단<br></h1>";
    //     while ($j<9)
    //     {
    //         echo "<h1>",$i+2," X ",$j+1," = ",($i+2)*($j+1),"<br></h1>";
    //         $j++;
    //     }
    //     $j = 0;
    //     $i++;
    // }

    // if 문을 활용해서 while문 돌리기
    // $num=2;
    // $count = 1;
    // $end = 5;

    // while($num<=$end)
    // {
    //     if($count == 1)
    //         echo $num,"단<br>";
    //     echo $num," X ",$count, " = ", $num*$count,"<br>";
    //     $count++;
    //     if($count == 10)
    //     {
    //         $num++;
    //         $count = 1;
    //         echo "<br>";
    //     }
    // }

?>