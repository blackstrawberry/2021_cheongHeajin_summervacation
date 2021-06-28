<!DOCTYPE html>
<html>
<head>
    <title>값의 입력 및 출력</title>
</head>
<body>
    <h1> 데이터의 입력 </h1>
    <form method = "POST" action="index.php">
        이름 : <input type="text" name="name"/><br/>
        나이 : <input type="text" name="age"/><br/>
        직업 : <input type="text" name="jop"/><br/>
        <input type="submit" name="submit"/>
    </form>

    <?php
        echo "이름: ".$_POST['name']."<br/>";
        echo "나이: ".$_POST['age']."<br/>";
        echo "직업: ".$_POST['jop']."<br/>";
    ?>

</body>
</html>