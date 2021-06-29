<!-- https://codeup.kr/problem.php?id=1675 -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
    <h1>암호문 입력(공백과 영어 소문자만!)</h1>
    <form method = "POST" action="secretcode.php">
        입력 <input type="text" name="secret"/>
        <input type="submit" name="submit"/>
    </form>

    <?php
        $secret = $_POST['secret'];
        $str = str_split($secret);
        $i = 0;
        echo "입력된 암호 : ",$secret,"<br>";
        echo "암호 변환 : ";
        while($i < count($str))
        {
            $code = ord($str[$i])-3;
            if ($code == 29)
            {
                $code = 32;
            }
            if ($code == 94)
            {
                $code = 120;
            }
            if ($code == 95)
            {
                $code = 121;
            }
            if ($code == 96)
            {
                $code = 122;
            }
            echo chr($code);
            $i++;
        }
    ?>

</body>
</html>