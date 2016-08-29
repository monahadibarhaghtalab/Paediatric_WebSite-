@extends('layouts.app')

@section('content')


        <!DOCTYPE html>
<html lang="en">
<head>

    <title>دکتر هادی برحق طلب</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="content-language" content="fa" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <!--<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">-->
    <link href="jnaqsh-bootstrap-14a4bc1/docs/assets/css/bootstrap.css" rel="stylesheet">
    <link href="jnaqsh-bootstrap-14a4bc1/docs/assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="jnaqsh-bootstrap-14a4bc1/docs/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="jnaqsh-bootstrap-14a4bc1/docs/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="jnaqsh-bootstrap-14a4bc1/docs/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="jnaqsh-bootstrap-14a4bc1/docs/assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="jnaqsh-bootstrap-14a4bc1/docs/assets/ico/favicon.png">

    <link href="style.css" rel="stylesheet">

    <link href='font.css' rel='stylesheet' type='text/css'>



    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    </script>

    <script>
        function getMessage(){
            $.ajax({
                type:'POST',
                url:'/getmsg',
                data:'_token = <?php echo csrf_token() ?>',
                success:function(data){
                    $("#msg").html(data.msg);
                }
            });
        }
    </script>

</head>

<body class="body-style home-body">
<!--header-->
<div class="navbar navbar-fixed-top header-style">
    <div class="container-fluid">
        <button type="button" class="btn btn-navbar collapse-navbar" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="brand brand-navbar fa-font-set" href="#">دکتر نظام برحق طلب</a>
        <div class="nav-collapse collapse" id="myNavbar">
            <ul class="nav">
                <li class="fa-font-set"><a href="#">نوبت دهی</a></li>
                <li class="fa-font-set"><a href="#about">پرسش و پاسخ</a></li>
                <li class="fa-font-set"><a href="#contact">تماس با ما</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>



<div id = 'msg'>This message will be replaced using Ajax.
    Click the button to replace the message.</div>
<?php
echo Form::button('Replace Message',['onClick'=>'getMessage()']);
?>
<!--content-->
<div class="container">
    <div class="row-fluid">
        <div class="span12">
            <div class="bg-image">
                <img class="img-responsive bg-img" src="content/img/home_bg.jpg">
                <img class="img-responsive bg-img-repeat" src="content/img/home_bg_repeat.jpg">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-3"></div>
        <div class="col-xs-6">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">

                    <div class="item active">
                        <img class="gallery-img" src="content/gallery/1.jpg" alt="">
                        <div class="carousel-caption">
                            <h3 class="fa-font-set">عنوان اول</h3>
                            <p class="fa-font-set">توضیحات عنوان اول</p>
                        </div>
                    </div>

                    <div class="item">
                        <img class="gallery-img" src="content/gallery/2.jpg" alt="">
                        <div class="carousel-caption">
                            <h3 class="fa-font-set">عنوان دوم</h3>
                            <p class="fa-font-set">توضیحات عنوان دوم</p>
                        </div>
                    </div>

                    <div class="item">
                        <img class="gallery-img" src="content/gallery/3.jpg" alt="">
                        <div class="carousel-caption">
                            <h3 class="fa-font-set">عنوان سوم</h3>
                            <p class="fa-font-set">توضیحات عنوان سوم</p>
                        </div>
                    </div>

                    <div class="item">
                        <img class="gallery-img" src="content/gallery/4.jpg" alt="">
                        <div class="carousel-caption">
                            <h3 class="fa-font-set">عنوان چهارم</h3>
                            <p class="fa-font-set">توضیحات عنوان چهارم</p>
                        </div>
                    </div>

                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-xs-3"></div>
    </div>
</div>
<div class="footer-container">
    <!--footer-->
    <div class="row footer">
        <div class="fa-font-set">سلام</div>
        <div class="row" style="z-index:100;">
            <div class="profile-header-container">
                <div class="col-xs-3">
                    <div class="profile-header-img">
                        <img class="img-circle" src="content/img/profile.jpg" />
                        <!-- badge -->
                        <div class="rank-label-container">
                            <span class="label label-default rank-label ">دکتر نظام برحق طلب - متخصص اطفال</span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-5">
                    <div class="fa-font-set footer-detail">آدرس:  شیراز - خیابان انقلاب (‌نادر) - چهارراه گمرک - مجتمع نادر - طبقه سوم - واحد ۳۰۳ <br> شماره تماس: ۳۲۳۲۲۴۸۹-۰۷۱</div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="jnaqsh-bootstrap-14a4bc1/docs/assets/js/jquery.js"></script>
<script src="jnaqsh-bootstrap-14a4bc1/docs/assets/js/bootstrap-transition.js"></script>
<script src="jnaqsh-bootstrap-14a4bc1/docs/assets/js/bootstrap-alert.js"></script>
<script src="jnaqsh-bootstrap-14a4bc1/docs/assets/js/bootstrap-modal.js"></script>
<script src="jnaqsh-bootstrap-14a4bc1/docs/assets/js/bootstrap-dropdown.js"></script>
<script src="jnaqsh-bootstrap-14a4bc1/docs/assets/js/bootstrap-scrollspy.js"></script>
<script src="jnaqsh-bootstrap-14a4bc1/docs/assets/js/bootstrap-tab.js"></script>
<script src="jnaqsh-bootstrap-14a4bc1/docs/assets/js/bootstrap-tooltip.js"></script>
<script src="jnaqsh-bootstrap-14a4bc1/docs/assets/js/bootstrap-popover.js"></script>
<script src="jnaqsh-bootstrap-14a4bc1/docs/assets/js/bootstrap-button.js"></script>
<script src="jnaqsh-bootstrap-14a4bc1/docs/assets/js/bootstrap-collapse.js"></script>
<script src="jnaqsh-bootstrap-14a4bc1/docs/assets/js/bootstrap-carousel.js"></script>
<script src="jnaqsh-bootstrap-14a4bc1/docs/assets/js/bootstrap-typeahead.js"></script>

<div class="col-lg-12">
    <div class="page-header">
        <h1>Display Instagram Feed On Website - LEVEL 1 - Live Demo</h1>
        <?php
        // use this instagram access token generator http://instagram.pixelunion.net/
        $access_token="2033081274.1677ed0.c92fbe93dca04777a6193617d0eb2007";
        $photo_count=9;

        $json_link="https://api.instagram.com/v1/users/self/media/recent/?";
        $json_link.="access_token={$access_token}&count={$photo_count}";

        $json = file_get_contents($json_link);
        $obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);

        ?>
    </div>
</div>


<!--instagram start --->
<div class="container">
    <div class="row">

        <?php


        foreach ($obj['data'] as $post) {

            $pic_text=$post['caption']['text'];
            $pic_link=$post['link'];
            $pic_like_count=$post['likes']['count'];
            $pic_comment_count=$post['comments']['count'];
            $pic_src=str_replace("http://", "https://", $post['images']['standard_resolution']['url']);
            $pic_created_time=date("F j, Y", $post['caption']['created_time']);
            $pic_created_time=date("F j, Y", strtotime($pic_created_time . " +1 days"));

            echo "<div class='col-md-4 col-sm-6 col-xs-12 item_box'>";
            echo "<a href='{$pic_link}' target='_blank'>";
            echo "<img class='img-responsive photo-thumb' src='{$pic_src}' alt='{$pic_text}'>";
            echo "</a>";
            echo "<p>";
            echo "<p>";
            echo "<div style='color:#888;'>";
            echo "<a href='{$pic_link}' target='_blank'>{$pic_created_time}</a>";
            echo "</div>";
            echo "</p>";
            echo "<p>{$pic_text}</p>";
            echo "</p>";
            echo "</div>";
        }
        ?>
                <!-- Instagram feed will be here -->

    </div>
</div>
<!---- instagram finished --- >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</body>
</html>
@endsection
