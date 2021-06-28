<!DOCTYPE html>
<html>
<head>
    <title>값의 입력 및 출력2</title>
</head>
<body>
    <h1> 데이터의 입력 </h1>
    <form method = "POST" action="inputPW.php">
        아이디 : <input type="text" name="id"/><br/>
        패스워드 : <input type="text" name="pw"/><br/>
        <input type="submit" name="submit"/>
    </form>

    <?php
        

        function howlong($str)
        {
            if (strlen($_POST['pw']) <= 8)
            {
                echo "매우 위험!";
            }
            elseif (strlen($str) > 8 && strlen($str) <= 13)
            {
                echo "보통";
            }
            elseif (strlen($_POST['pw']) > 13)
            {
                echo "좋음";
            }
            else
            {
                echo "Error!";
            }
        }

        echo "아이디: ".$_POST['id']."<br/>";
        echo "비밀번호 상태: ",howlong($_POST['pw']),"<br/>";


    ?>

</body>
</html>