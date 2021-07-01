<html>
    <head>
        <meta charset="utf-8"/>
        <title>web cam connection test</title>
        <script>
            if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
                navigator.mediaDevices.getUserMedia({ video: true }).then(function(stream) {
                    var video = document.getElementById('video');
                    video.srcObject = stream;
                    video.play();
                });
            }
            var video = document.getElementById('video');
        </script>


        <style>
            .video_absolute
            {
                position: absolute;
                top: 0px;
                left: 0px;
                z-index: 2;                
            }
        </style>
    </head>
    <body>
        <video id="video" width="100%" height="100%" controls="true" autoplay></video>
        <?php
            $x_pos = 20;
            $y_pos = 15;
            echo "<img style=\"position:absolute; top:",$y_pos,"%",";left:",$x_pos,"%;\"src=\"./rudolf.png\"></img>";
        ?>

    </body>
</html>