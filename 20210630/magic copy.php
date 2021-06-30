<?php
    ini_set('display_errors','0');

    $input_data = $_GET["val"];
    $input_len = strlen($input_data);
    $input_value =substr($input_data, 1, ($input_len-1));
    $level = substr($input_data)

    if($input_data == 0)
    {
        magic_page($level, $input_value);
    }
    else if (substr($input_data,0,1)==1)
    {
        magic_page($level, $input_value);
    }
    else if (substr($input_data,0,1)==2)
    {
        magic_page($level, $input_value);
    }
    else if (substr($input_data,0,1)==3)
    {
        magic_page($level, $input_value);
    }
    else if (substr($input_data,0,1)==4)
    {
        magic_page($level, $input_value);
    }
    else if (substr($input_data,0,1)==5)
    {
        magic_page($level, $input_value);
    }
    else if (substr($input_data,0,1)==6)
    {
        result_page($input_value);
    }

    function magic_page($level,$current_value)
    {
        echo ($level)+1,"단계 하단의 숫자 중 생각하신 숫자가 있으십니까?<br>";
        $point = pow(2,$level);

        for($num = $point; $num<50; $num++)
        {
            if($num%10 == 0)
            {
                echo "<br>";
            }
            if($num%2 == 1)
            {
                echo $num."&nbsp;&nbsp;&nbsp;&nbsp;";
            }
            if($in_count == $point)
            {
                $num += 2;
                $in_count = 0;
            }
            $line_count++;
            
        }

        echo "<br>";
        echo "<button id=\"btnfun1\" name=\"btnfun1\" onClick='location.href=\"magic.php?val=1",($current_value+$point),"\"'>존재함</button>";
        echo "<button id=\"btnfun2\" name=\"btnfun2\" onClick='location.href=\"magic.php?val=1",($current_value),"\"'>존재하지 않음</button>";
    }


    function magic_2_page($current_value)
    {
        $in_count = 0;
        $line_count = 0;
        echo "2단계 하단의 숫자 중 생각하신 숫자가 있으십니까?<br>";
        for($num = 2; $num<50; $num++)
        {
            if($in_count == 2)
            {
                $num += 2;
                $in_count = 0;
            }
            echo $num."&nbsp;&nbsp;&nbsp;&nbsp;";
            $in_count++;
            if($line_count != 0 && $line_count%5 == 0)
            {
                echo "<br>";
                //$line_count = 0;
            }
            $line_count++;
        }
        echo "<br>";
        echo "<button id=\"btnfun1\" name=\"btnfun1\" onClick='location.href=\"magic.php?val=2".($current_value+2)."\"'>존재함</button>";
        echo "<button id=\"btnfun2\" name=\"btnfun2\" onClick='location.href=\"magic.php?val=2".($current_value+0)."\"'>존재하지 않음</button>";
    }

    function magic_3_page($current_value)
    {
        $in_count = 0;
        $line_count = 0;
        echo "3단계 하단의 숫자 중 생각하신 숫자가 있으십니까?<br>";
        for($num = 4; $num<50; $num++)
        {
            if($in_count == 4)
            {
                $num += 4;
                $in_count = 0;
            }
            echo $num."&nbsp;&nbsp;&nbsp;&nbsp;";
            $in_count++;
            if($line_count != 0 && $line_count%5 == 0)
            {
                echo "<br>";
                //$line_count = 0;
            }
            $line_count++;
        }
        echo "<br>";
        echo "<button id=\"btnfun1\" name=\"btnfun1\" onClick='location.href=\"magic.php?val=3".($current_value+4)."\"'>존재함</button>";
        echo "<button id=\"btnfun2\" name=\"btnfun2\" onClick='location.href=\"magic.php?val=3".($current_value+0)."\"'>존재하지 않음</button>";
    }

    function magic_4_page($current_value)
    {
        $in_count = 0;
        $line_count = 0;
        echo "4단계 하단의 숫자 중 생각하신 숫자가 있으십니까?<br>";
        for($num = 8; $num<50; $num++)
        {
            if($in_count == 8)
            {
                $num += 8;
                $in_count = 0;
            }
            echo $num."&nbsp;&nbsp;&nbsp;&nbsp;";
            $in_count++;
            if($line_count != 0 && $line_count%5 == 0)
            {
                echo "<br>";
                //$line_count = 0;
            }
            $line_count++;
        }
        echo "<br>";
        echo "<button id=\"btnfun1\" name=\"btnfun1\" onClick='location.href=\"magic.php?val=4".($current_value+8)."\"'>존재함</button>";
        echo "<button id=\"btnfun2\" name=\"btnfun2\" onClick='location.href=\"magic.php?val=4".($current_value+0)."\"'>존재하지 않음</button>";
    }

    function magic_5_page($current_value)
    {
        $in_count = 0;
        $line_count = 0;
        echo "5단계 하단의 숫자 중 생각하신 숫자가 있으십니까?<br>";
        for($num = 16; $num<50; $num++)
        {
            if($in_count == 16)
            {
                $num += 16;
                $in_count = 0;
            }
            echo $num."&nbsp;&nbsp;&nbsp;&nbsp;";
            $in_count++;
            if($line_count != 0 && $line_count%5 == 0)
            {
                echo "<br>";
                //$line_count = 0;
            }
            $line_count++;
        }
        echo "<br>";
        echo "<button id=\"btnfun1\" name=\"btnfun1\" onClick='location.href=\"magic.php?val=5".($current_value+16)."\"'>존재함</button>";
        echo "<button id=\"btnfun2\" name=\"btnfun2\" onClick='location.href=\"magic.php?val=5".($current_value+0)."\"'>존재하지 않음</button>";
    }

    function magic_6_page($current_value)
    {
        echo "6단계 하단의 숫자 중 생각하신 숫자가 있으십니까?<br>";
        for($num = 32; $num<50; $num++)
        {
            if($in_count == 32)
            {
                $num += 32;
                $in_count = 0;
            }
            echo $num."&nbsp;&nbsp;&nbsp;&nbsp;";
            $in_count++;
            if($line_count != 0 && $line_count%5 == 0)
            {
                echo "<br>";
                //$line_count = 0;
            }
            $line_count++;
        }
        echo "<br>";
        echo "<button id=\"btnfun1\" name=\"btnfun1\" onClick='location.href=\"magic.php?val=6".($current_value+32)."\"'>존재함</button>";
        echo "<button id=\"btnfun2\" name=\"btnfun2\" onClick='location.href=\"magic.php?val=6".($current_value+0)."\"'>존재하지 않음</button>";
    }

    function result_page($input_value)
    {
        echo "당신이 생각하는 숫자는 ".$input_value."입니다.";
    }

?>