<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>던전 보상</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <style>
            ul{
                list-style:none;
                padding-left:0px;
            }
            li{
                display:inline-block;
                padding: 0px 30px 30px 30px;
            }
        </style>
    </head>
    <body id="page-top">

        <!-- Masthead-->
 
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <?php

                $item_list = array("item1.png","item2.png","item3.png","item4.png",
                                    "item5.png","item6.png","item7.png","item8.png",
                                    "item9.png","item10.png","item11.png","item12.png",
                                    "item13.png","item14.png","item15.png","item16.png");


                while(True)
                {
                    $item_box_1 = $item_list[rand(0, count($item_list)-1)];
                    $item_box_2 = $item_list[rand(0, count($item_list)-1)];
                    $item_box_3 = $item_list[rand(0, count($item_list)-1)];
                    $item_box_4 = $item_list[rand(0, count($item_list)-1)];
                    if($item_box_2 == $item_box_1)
                    {
                        $item_box_2 = $item_list[rand(0, count($item_list)-1)];  
                    }
                    else if($item_box_1 == $item_box_3 || $item_box_2 == $item_box_3)
                    {
                        $item_box_3 = $item_list[rand(0, count($item_list)-1)];
                    }
                    else if($item_box_1 == $item_box_4 || $item_box_2 == $item_box_4 || $item_box_3 == $item_box_4)
                    {
                        $item_box_4 = $item_list[rand(0, count($item_list)-1)];
                    }
                    else{
                        break;
                    }
                }                 
                $reword = compact('item_box_1','item_box_2','item_box_3','item_box_4');
                shuffle($reword);
                echo "<ul>";
                for($i=0;$i<4;$i++)
                {
                echo "<li><p class=\"text-white-75 mb-5\" >item Box ",$i+1," 보상</p>","<img src=assets/img/$reword[$i]></li>";
                }
                echo "</ul>";
                echo "<div class=\"col-lg-8 align-self-baseline\">";
                echo "<a class=\"btn btn-primary btn-xl\" href=\"./index.html\">던전으로</a>";
                echo "</div>";
                ?>
                </div>
            </div>
        </header>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
