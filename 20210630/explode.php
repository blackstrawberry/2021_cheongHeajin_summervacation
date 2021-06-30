<?php
    $email = "jong7721@naver.com";
    $email_Array = explode("@",$email);
    echo "<pre>";// 시스템에 미리 지정된 고정폭 글꼴을 사용하여 표현
    var_dump($email_Array);// 배열의 모든 요소를 출력 

    echo "이메일 호스트 출력<br></pre>";
    echo $email_Array[1];
?>