<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
    <!-- https://codeup.kr/problem.php?id=1216 -->
    <h1>대영이의 SNS컨설팅 회사</h1>
    <form method = "POST" action="consultingINC.php">
        홍보를 안했을 때 수입 : <input type="text" name="Xhongbo"/><br/>
        홍보를 했을 때 수입 : <input type="text" name="hongbo"/><br/>
        홍보비용 : <input type="text" name="cost"/><br/>
        <input type="submit" name="submit"/>
    </form>

    <?php
        $Xhongbo = $_POST['Xhongbo'];
        $hongbo = $_POST['hongbo'];
        $cost = $_POST['cost'];

        echo "<br>홍보를 안했을 때 이익 : ",$Xhongbo,"<br>";
        echo "홍보 했을 때 이익 : ",$hongbo,"<br>";
        echo "홍보 비 : ",$cost,"<br>";

        if($Xhongbo == ($hongbo-$cost))
        {
            echo "<br><p>dose not matter</p>";
        }
        elseif($Xhongbo > ($hongbo-$cost))
        {
            echo "<br>홍보를 안 할 경우",$Xhongbo - ($hongbo-$cost),"만큼의 이득 존재","<p>do not advertise</p>";
        }
        elseif(($hongbo-$cost) > $Xhongbo)
        {
            echo "<br>홍보를 할 경우 ",($hongbo-$cost) - $Xhongbo,"만큼의 이득 존재","<p>advertise</p>";
        }
        else
        {
            echo "올바른 숫자를 입력하세요.";
        }

    ?>

</body>
</html>