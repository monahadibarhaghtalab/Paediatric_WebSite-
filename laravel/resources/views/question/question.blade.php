<!DOCTYPE html>
<html>
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
    <!--<link rel="apple-touch-icon-precomposed" sizes="144x144" href="jnaqsh-bootstrap-14a4bc1/docs/assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="jnaqsh-bootstrap-14a4bc1/docs/assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="jnaqsh-bootstrap-14a4bc1/docs/assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="jnaqsh-bootstrap-14a4bc1/docs/assets/ico/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="jnaqsh-bootstrap-14a4bc1/docs/assets/ico/favicon.png">-->

    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>

    <link href="style.css" rel="stylesheet">

    <link href='font.css' rel='stylesheet' type='text/css'>
    <script>
        $(document).ready(function(){
            $("#sign-up").click(function(){
                $("#log-in-content").hide();
                $("#sign-up-content").show(1000);
                $("#log-in-caption").text("ثبت نام");
            });
            $("#log-in-but").click(function(){
                $("#log-in-content").show();
                $("#sign-up-content").hide();
                $("#log-in-caption").text("ورود");
            });
            $(".dropdown-profile-container").mouseenter(function(){
                $(".dropdown-profile-caption").css("color","#cf2229");
                $(".dropdown-profile").css("border-color", "#cf2229");
            });
            $(".dropdown-profile-container").mouseleave(function(){
                $(".dropdown-profile-caption").css("color","darkgray");
                $(".dropdown-profile").css("border-color", "#007a6c");
            });
        });

        $('.carousel').carousel();
        $(document).ready(function(){
            $(".links-container").height($(".carousel-inner").height());
            $(window).resize(function(){
                $(".links-container").height($(".carousel-inner").height()-20);
            });
        });
    </script>

</head>

<body class="body-style question-body">
<!--header-->
<div class="navbar navbar-fixed-top header-style">
    <div class="container-fluid">
        <button type="button" class="btn btn-navbar collapse-navbar" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <a class="brand brand-navbar fa-font-set" href="#"><img class="profile-header-img img-circle" src="content/img/profile.jpg" />
            دکتر نظام برحق طلب</a>
        <div class="nav-collapse collapse" id="myNavbar">
            <ul class="nav">
                <li class="header-menu fa-font-set"><a href="#">نوبت دهی</a></li>
                <li class="header-menu fa-font-set"><a href="#">پرسش و پاسخ</a></li>
                <li class="header-menu fa-font-set"><a href="#">تماس با ما</a></li>
            </ul>
        </div><!--/.nav-collapse -->
        <img class="logo-header" src="content/img/logo.png">
    </div>
</div>
<!--content-->
<div class="container">
    <div class="row-fluid">
        <div class="span12">
            <div class="bg-image">
                <img class="img-responsive" src="content/img/question_bg.jpg">
                <div class="question-container fa-font-set">
                    @foreach($questions as $question)
                        <p class="qa-caption-style">سوال</p>
                        <p class="qa-description-style">{{$question->text}}</p>
                        <p class="qa-caption-style">پاسخ</p>
                        <p class="qa-description-style qa-bottom">{{$question->answer}}</p>
                    @endforeach
                </div>
                <img class="img-responsive bg-img-repeat" src="content/img/question_bg-repeat.jpg">
                <!--<img class="img-responsive bg-img-repeat" src="content/img/question_bg-repeat.jpg">
<img class="img-responsive bg-img-repeat" src="content/img/question_bg-repeat.jpg">
<img class="img-responsive bg-img-repeat" src="content/img/question_bg-repeat.jpg">

<img class="img-responsive bg-img-repeat" src="content/img/question_bg-repeat.jpg">
<img class="img-responsive bg-img-repeat" src="content/img/question_bg-repeat.jpg">

<img class="img-responsive bg-img-repeat" src="content/img/question_bg-repeat.jpg">
<img class="img-responsive bg-img-repeat" src="content/img/question_bg-repeat.jpg">

<img class="img-responsive bg-img-repeat" src="content/img/question_bg-repeat.jpg">
<img class="img-responsive bg-img-repeat" src="content/img/question_bg-repeat.jpg">-->
            </div>
        </div>
    </div>
</div>

<div class="footer-container">
    <!--footer-->
    <div class="row footer">
        <div class="row" style="z-index:100;">
            <div class="profile-header-container">
                <div class="col-xs-8 col-rtl">
                    <div class="fa-font-set footer-detail">آدرس: ایران - شیراز - خیابان فلان - کوچه ی فلان - پلاک فلان - واحد فلان <br> شماره تماس: 023-13246578</div>
                </div>
                <div class="col-xs-3 col-rtl"><button type="submit"  class="red-btn fa-font-set" data-toggle="modal" data-target="#login">ورود</button></div>
            </div>
        </div>
    </div>

</div>

<!-- log in & sign up-->
<div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog">

        <!-- login content-->
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <div class="col-xs-6 col-rtl">
                        <h4 id="log-in-caption" class="modal-title fa-font-set modal-caption">ورود</h4>
                    </div>
                    <div class="col-xs-6 col-rtl">
                        <button type="button" class="close modal-close" data-dismiss="modal">&times;</button>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="row">
                        <div class="col-xs-2"></div>
                        <div class="col-xs-8">
                            <div id="log-in-content">
                                <div class="row" class="modal-row">
                                    <div class="form-group">
                                        <input type="text" name="data[username]" id="username" value="" class="form-control modal-input fa-font-set " placeholder="نام کاربری(انگلیسی)">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="data[password]" id="password" value="" class="form-control modal-input fa-font-set" placeholder="رمز عبور">
                                    </div>
                                </div>
                                <div class="row" class="modal-row">
                                    <div class="checkbox" style="float: right;">
                                        <label><input type="checkbox"><span class="fa-font-set">من را به خاطر بسپار</span></label>
                                    </div>
                                    <button type="submit" class="btn btn-enter fa-font-set">ورود</button>
                                </div>
                                <div class="row" class="modal-row">
                                    <a class="fa-font-set col-rtl modal-text-link" href="#">اطلاعات کاربری خود را فراموش کرده‌ام</a>
                                </div>
                                <div class="row" class="modal-row">
                                    <a id="sign-up" class="fa-font-set col-rtl modal-text-link" href="#">تاکنون حساب کاربری نساخته‌ام</a>
                                </div>
                            </div>
                            <div class="row" id="sign-up-content" class="modal-row" style="display:none;">
                                <div class="form-group">
                                    <input type="email" name="data[email]" id="email" value="" class="form-control modal-input fa-font-set " placeholder="ایمیل">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="data[username]" id="username" value="" class="form-control modal-input fa-font-set " placeholder="کد امنیتی">
                                </div>
                                <button type="submit" class="btn button-upload fa-font-set">ثبت نام</button>
                            </div>

                        </div>
                        <div class="col-xs-2"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script>
    $(document).ready(function() {
        $(window).resize(function(e) {
            var qa_height = $(".question-container").height();
            var header_height = $(".navbar-fixed-top").height();
            var footer_height = $(".footer-container").height();
            var body_height = $(document).height();
            //alert("qa "+qa_height+" header "+header_height+" footer "+footer_height+" body "+body_height);
            if(qa_height > (body_height - (footer_height + header_height))) {
                // alert("cond1 "+qa_height+" cond2 "+(body_height - (footer_height + header_height)));
                $(".bg-img-repeat").after('<img class="img-responsive bg-img-repeat" src="content/img/question_bg-repeat.jpg">');
            }
        });
    });
</script>
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
<!--<script src="http://code.jquery.com/jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>-->
</body>
</html>