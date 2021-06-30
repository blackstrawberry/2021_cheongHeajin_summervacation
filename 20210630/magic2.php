<html>
    <head>
        <meta charset="utf-8"></meta>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>마술 쇼</title>
        <style>
            body{
                background-image:url('magicbg.jpg');
                background-repeat:no-repeat;
                background-size : cover ;
            }
            #center{
                text-align: center;
            }
            #title{
                font-size: 5vw;
                font-weight: bold;
            }
            #center-box{
                position: relative;
                top: 50%;
                left: 50%;
                transform: translate(-50%,-50%);
                font-size: 2.5vw;
            }
            .button {font-size:3vw; padding:3% 10%}
        </style>
    </head>
    <body>
        <div id="center-box">
            <!-- <fieldset id="center">
                <legend id="title">🦹‍♀️마술 프로그램을 시작합니다.🧙‍♀️</legend>
                1부터 50까지의 숫자를 생각하신 후 준비가 된다면 다음을 클릭하세요.<br><br>
                <button class="button" name="btnfun1" onClick='location.href="magic2.php?val=00"'>다음</button>
            </fieldset> -->
            <div id='center'>
            <?php
                echo "<br>";
                ini_set('display_errors', '0');

                $input_data = $_GET["val"];
                $input_len = strlen($input_data);
                $input_value = substr($input_data, 1, ($input_len - 1));
                $level = substr($input_data, 0, 1);
                switch($level)
                {
                    case 0:
                        masic_page($level,$input_value);
                        break;
                    case 1:
                        masic_page($level,$input_value);
                        break;
                    case 2:
                        masic_page($level,$input_value);
                        break;
                    case 3:
                        masic_page($level,$input_value);
                        break;
                    case 4:
                        masic_page($level,$input_value);
                        break;
                    case 5:
                        masic_page($level,$input_value);
                        break;
                    case 6:
                        result_page($input_value);
                        break;
                }

                function masic_page($level, $current_value)
                {
                    $in_count = 0;
                    $line_count = 0;

                    echo ($level+1),"<strong>단계 하단의 숫자 중 생각하신 숫자가 있으십니까?</strong> <br><br>";
                    $point = pow(2,$level);

                    for($num = $point; $num < 50; $num++)
                    {
                        if($in_count == $point)
                        {
                            $num += $point;
                            $in_count = 0;
                        }

                        echo $num, "&nbsp;&nbsp;&nbsp;&nbsp;";
                        $in_count++;
                        
                        if($line_count != 0 && $line_count % 5 == 0)
                        {
                            echo "<br>";
                            //$line_count = 0;
                        }
                        $line_count++;
                    }
                    echo "<br><br>";
                    echo "<button class='button' id=\"btnfun1\" name=\"btnfun1\" onClick='location.href=\"magic2.php?val=",($level+1),($current_value +$point), "\"'>존재함</button>&nbsp;";
                    echo "<button class='button' id=\"btnfun2\" name=\"btnfun2\" onClick='location.href=\"magic2.php?val=",($level+1),($current_value), "\"'>존재하지 않음</button><br>";
                }

                function result_page($input_value)
                {
                    echo "당신이 생각한 숫자는 ", $input_value, "입니다.";
                }
            ?>
            </div>

        </div>
        

    </body>
</html>




