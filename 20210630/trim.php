<?php
    $str = "   Hello   ";//일부러 문자열 앞 뒤에 공백을 넣음

    echo "trim() 함수를 사용하지 않고 출력<br/>";
    echo "|".$str."|";

    echo "<br /><br />";
    echo "trim() 함수를 사용하고 출력<br/>";
    echo "|".trim($str)."|";

?>