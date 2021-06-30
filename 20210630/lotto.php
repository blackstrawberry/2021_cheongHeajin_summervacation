<html>
    <head>
        <meta charset="utf-8"/>
        <title>로또번호 맞추기</title>
    </head>

    <body>
        <h1>추첨 번호 입력</h1>
        <form method="POST" action="lotto.php">
            번호 1 : <input type="text" name="num1"/><br/>
            번호 2 : <input type="text" name="num2"/><br/>
            번호 3 : <input type="text" name="num3"/><br/>
            번호 4 : <input type="text" name="num4"/><br/>
            번호 5 : <input type="text" name="num5"/><br/>
            번호 6 : <input type="text" name="num6"/><br/>
            <input type="submit" name="submit"/>
        </form>
    <body>
</html>

<?php
    $lotto = array(1,3,4,5,9,11);
    $input_lotto = array($_POST['num1'],$_POST['num2'],$_POST['num3'],$_POST['num4'],$_POST['num5'],$_POST['num6']);
    $count = 0;

    for($mux_count= 0; $mux_count <= 5; $mux_count++)
    {
        $input_lotto[$mux_count] == $lotto[$mux_count] ? $count++ : $count;
    }

    echo "<br>입력 번호 : ",print_r($input_lotto),"<br>";
    echo "당첨 번호 : ",print_r($lotto),"<br>";
    echo "맞춘 번호 갯수 : ",$count;

?>