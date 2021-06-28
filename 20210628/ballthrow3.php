
    <?php
        
        $sk = rand(1,100);
        // https://codeup.kr/problem.php?id=1159
        echo "<h1>던진 공의 위치 = ",$sk,"</h1><br>";
        if (($sk >= 50 && $sk <=70) || ($sk%6 == 0))
        {
            echo "<h1>슬기 Win! ^__^</h1>";
        }
        else
        {
            echo "<h1>슬기 Lose T.T</h1>";
        }

    ?>
