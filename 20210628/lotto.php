<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
    <h1> 데이터의 입력 (0~45)</h1>
    <form method = "POST" action="lotto.php">
        숫자1 : <input type="text" name="num1"/><br/>
        숫자2 : <input type="text" name="num2"/><br/>
        숫자3 : <input type="text" name="num3"/><br/>
        숫자4 : <input type="text" name="num4"/><br/>
        숫자5 : <input type="text" name="num5"/><br/>
        숫자6 : <input type="text" name="num6"/><br/>
        <input type="submit" name="submit"/>
    </form>

    <?php

        $lotto = array(1,3,5,7,9,11);

        $input_num1 = $_POST['num1'];
        $input_num2 = $_POST['num2'];
        $input_num3 = $_POST['num3'];
        $input_num4 = $_POST['num4'];
        $input_num5 = $_POST['num5'];
        $input_num6 = $_POST['num6'];

        $count = 0;

        if($input_num1 == $lotto[0])
        {
            $count++;
        }
        if($input_num2 == $lotto[1])
        {
            $count++;
        }
        if($input_num3 == $lotto[2])
        {
            $count++;
        }
        if($input_num4 == $lotto[3])
        {
            $count++;
        }
        if($input_num5 == $lotto[4])
        {
            $count++;
        }
        if($input_num6 == $lotto[5])
        {
            $count++;
        }

        switch ($count)
        {
            case 6:
                echo "1등";
                break;
            case 5:
                echo "2등";
                break;
            case 4:
                echo "3등";
                break;
            case 3:
                echo "4등";
                break;
            default:
                echo "다음 기회에...";
        }
        
        echo "<br><br>","당첨번호 :",$lotto[0],"&nbsp",$lotto[1],"&nbsp",$lotto[2],"&nbsp",$lotto[3],"&nbsp",$lotto[4],"&nbsp",$lotto[5],"&nbsp";

        echo "<br><br><br>";
        echo "num1: ".$_POST['num1']."<br/>";
        echo "num2: ".$_POST['num2']."<br/>";
        echo "num3: ".$_POST['num3']."<br/>";
        echo "num4: ".$_POST['num4']."<br/>";
        echo "num5: ".$_POST['num5']."<br/>";
        echo "num6: ".$_POST['num6']."<br/>";
        echo "<br><br><br>";
        // echo "당첨번호는 ",srt($lotto),"입니다.";
        // echo "맞춘 갯수는 ",$count,"개 입니다.";
    ?>

</body>
</html>