<?php

    // 배열 사용해보기
    $paper[0] = "Copier";
    $paper[1] = "Inkjet";
    $paper[2] = "Laser";
    $paper[3] = "Photo";

    echo "<pre>";
    print_r($paper);
    echo "</pre>";

    echo "<pre>";
    var_dump($paper);
    echo "</pre>";

    for($i=0 ; $i<4 ; $i++)
    {
        echo "$i: $paper[$i]<br/>";
    }
        
    // 연관배열
    $paper['copier'] = "Copier & Multipurpose";
    $paper['inkjet'] = "Inkjet Printer";
    $paper['laser'] = "Laser printer";
    $paper['photo'] = "Photographic paper";

    echo $paper['laser'];


    $p1 = array("Copier", "Inkjet", "Laser", "Photo");

    echo "<br><br><br>";
    
    //Array 키워드를 사용한 대입: 더 간결하고 빠르게 배열에 값을 대입
    echo "p1 element: ". $p1[2] . "<br>";

    $p2 = array('copier' => "Copier & Multipurpose",
                'inkjet' => "Inkjet Printer",
                'laser' => "Laser Printer",
                'photo' => "Photographic Paper");

    echo "p2 element: ". $p2['inkjet'] . "<br>";

    echo "<br><br><br>";

    //Foreach...as 루프를 이용한 배열 출력
    $paper = array("Copier", "Inkjet", "Laser", "Photo");
    $j = 0;

    foreach($paper as $item)
    {
        echo "$j: $item<br>";
        ++$j;
    }

    echo "<br><br><br>";

    //Foreach...as 연관배열에 대해 사용
    $paper = array('copier' => "Copier & Multipurpose",
                'inkjet' => "Inkjet Printer",
                'laser' => "Laser Printer",
                'photo' => "Photographic Paper");
    foreach($paper as $item => $description)
    {
        echo "$item: $description<br>";
    }

    echo "<br><br><br>";

    //while문과 list를 이용한 배열의 출력
    $paper = array('copier' => "Copier & Multipurpose",
                'inkjet' => "Inkjet Printer",
                'laser' => "Laser Printer",
                'photo' => "Photographic Paper");


    while (list($item, $description) = each($paper))
    {
        echo "$item : $description<br>";
    }


    echo "<br><br><br>";

    //다차원 연관 배열 생성 및 출력
    $products = array(
        'paper' => array(
            'copier' => "Copier & Multipurpose",
            'inkjet' => "Inkjet Printer",
            'laser' => "Laser Printer",
            'photo' => "Photographic Paper"),
        'pens' => array(
            'ball' => "Ball Piont",
            'hilite' => "Highlighters",
            'marker' => "Markers"),
        'misc' => array(
            'tape' => "Sticky Tape",
            'glue' => "Adhesives",
            'clips' => "Paperclips") );
    echo "<pre>";
    foreach ($products as $section => $items)
    {
        foreach($items as $key => $value)
        {
            echo "$section: \t$key\t($value)<br>";
        }
    }
    echo "</pre>";

    echo "<br><br><br>";

    // 배열 관련 함수
    $sample = array("apple","banana","orange","strawberry","melon","cherry");
    // 1. sort
    echo "<pre>";
    sort($sample);
    for($i=0;$i<count($sample);$i++)
    {
        echo "$i : $sample[$i]<br>";
    }
    echo "<br><br>";
    rsort($sample);
    for($i=0;$i<count($sample);$i++)
    {
        echo "$i : $sample[$i]<br>";
    }
    echo "<br><br>";
    // 2. Shuffle
    shuffle($sample);
    for($i=0;$i<count($sample);$i++)
    {
        echo "$i : $sample[$i]<br>";
    }
    echo "<br><br>";
    // 3. Extract 는 $_GET이나 $_POST를 이용해 받은 배열을 변수로 처리한다.
    // 4. compact
    $a = "aa";
    $b = "bb";
    $c = "cc";
    $d = "dd";
    $contact = compact('a','b','c','d');
    print_r($contact);

    echo "</pre>";

    echo "<br><br><br>";

    
?>