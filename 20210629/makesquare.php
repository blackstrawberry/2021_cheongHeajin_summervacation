<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
    <h1>베이컨을 몇층 만들래?</h1>
    <form method = "POST" action="makesquare.php">
        입력 <input type="text" name="bacon"/><br/>
        <input type="submit" name="submit"/>
    </form>

    <?php
        $bacon = $_POST['bacon']+1;
        for($j=0;$j<$bacon;$j++)
        {
            for($i=$bacon;$i>$j;$i--)
                echo "&nbsp;&nbsp;";
            for ($i=0;$i<$j;$i++)
                echo "🥓";
            echo "<br>";        
        }
        echo "<br>";

        for($j=0;$j<$bacon;$j++)
        {
            for($i=$bacon;$i>$j;$i--)
                echo "&nbsp;&nbsp;";
            for ($i=0;$i<$j;$i++)
                echo "🥓";
            echo "<br>";    
        }
        for ($j=0;$j<$bacon;$j++)
        {
            for ($i=0;$i<$j;$i++)
                echo "&nbsp;&nbsp;";
            for($i=$bacon;$i>$j;$i--)
                echo "🥓";
            echo "<br>";  
        }
        

    ?>

</body>
</html>