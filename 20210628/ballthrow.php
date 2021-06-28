
    <?php
        // https://codeup.kr/problem.php?id=1158
        $sk = rand(1,100);

        echo "<h1>던진 공의 위치 = ",$sk,"</h1><br>";
        if (($sk >= 30 && $sk <=40) || ($sk >=60 && $sk <= 70))
        {
            echo "<h1>슬기 Win! ^__^</h1>";
        }
        else
        {
            echo "<h1>슬기 Lose T.T</h1>";
        }

    ?>
