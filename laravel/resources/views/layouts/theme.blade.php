
<!DOCTYPE html>
<html>
<head>
    <title>دکتر نظام برحق طلب</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="content-language" content="fa" />
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <link href="/jnaqsh-bootstrap-14a4bc1/docs/assets/css/bootstrap.css" rel="stylesheet">
    <link href="/jnaqsh-bootstrap-14a4bc1/docs/assets/css/bootstrap-responsive.css" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="/slick/slick-theme.css"/>

    <link href="/style.css" rel="stylesheet">
    <link href="/responsive-style.css" rel="stylesheet">

    <link href='/font.css' rel='stylesheet' type='text/css'>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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


<body class="body-style home-body" dir="rtl" style="height: auto;">

<!--header-->
<div class="navbar navbar-fixed-top header-style">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="first-img-box">
                    <img src="/content/img/shafi.png">
                </div>
            </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-xs-12"></div>
        <button type="button" class="btn btn-navbar collapse-navbar mobile-menu-button" data-toggle="collapse" data-target="#myNavbar ">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
            </div>
        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">

            <img class="logo-header img-responsive  img-circle top-logo" src="/content/img/logo.jpg">
        </div>
            <div class="col-lg-6 col-md-6">


        <div class="nav-collapse collapse main-menu" id="myNavbar">
            <ul class="nav">
                <!-- <li class="header-menu fa-font-set"><a href="#">نوبت دهی</a></li> -->
                <li class="header-menu fa-font-set"><a href="/">خانه</a></li>
                <li class="header-menu fa-font-set"><a href="/article_all">مطالب آموزشی</a></li>
                <li class="header-menu fa-font-set"><a href="/question_all">پرسش و پاسخ</a></li>
                <li class="header-menu fa-font-set"><a href="/gallery_all">گالری</a></li>
                <li class="header-menu fa-font-set"><a href="/contact_us">تماس با ما</a></li>
            </ul>
        </div><!--/.nav-collapse -->
            </div>
            <div class="col-lg-4 col-md-4 hidden-sm hidden-xs">
                <a class="brand brand-navbar fa-font-set" href="/"><img class="profile-header-img img-circle" src="/content/img/profile.jpg" />
                    دکتر نظام هادی برحق طلب</a>
            </div>

    </div>
    </div>







@yield('content')





<div class="footer-container">
    <!--footer-->
    <div class="container-fluid">
    <div class="row footer">
        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
        <a  class="insta-logo-container" href="https://www.instagram.com/dr.barhaghtalab">
        <img class="logo-header img-responsive insta-logo" src="/content/img/insta.png" >
        </a>
            </div>

        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 col-rtl">
            <button type="submit"  class="red-btn fa-font-set" data-toggle="modal" data-target="#login">ورود</button>
        </div>

                <div class=" col-lg-8 col-md-8 col-sm-12 col-xs-12 col-rtl">
                    <div class="fa-font-set footer-detail"><p>آدرس: ایران - شیراز - خیابان نادر -چهارراه گمرک - ساختمان نادر - واحد ۳۰۳ <br></br> شماره تماس:۳۲۳۲۲۴۸۹-۰۷۱</p></div></br></br>
                </div>


                </div>



    </div>
    </div>








<!-- log in & sign up-->
<div class="modal-parent">
<div class="modal fade" tabindex="-1" id="login" role="dialog">
    <div class="modal-dialog" role="document">

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
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-xs-2"></div>
                        <div class="col-xs-8">
                            <div id="log-in-content">
                                <div class="row" class="modal-row">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" value="" class="form-control modal-input fa-font-set " placeholder="ایمیل">
                                    </div>

                                    <div class="form-group">
                                        <input type="password" name="password" id="password" value="" class="form-control modal-input fa-font-set" placeholder="رمز عبور">
                                    </div>
                                </div>
                                <div class="row" class="modal-row">
                                    <!--- <div class="checkbox" style="float: right;">
                                         <label><input type="checkbox"><span class="fa-font-set">من را به خاطر بسپار</span></label>
                                     </div>--->
                                    <button type="submit" class="btn btn-enter fa-font-set">ورود</button>
                                </div>


                                <!---
                                <div class="row" class="modal-row">
                                    <a class="fa-font-set col-rtl modal-text-link" href="#">اطلاعات کاربری خود را فراموش کرده‌ام</a>
                                </div>
                                <div class="row" class="modal-row">
                                    <a id="sign-up" class="fa-font-set col-rtl modal-text-link" href="#">تاکنون حساب کاربری نساخته‌ام</a>
                                </div>
                                --->
                            </div>
                            <!--
                            <div class="row" id="sign-up-content" class="modal-row" style="display:none;">
                                <div class="form-group">
                                    <input type="email" name="data[email]" id="email" value="" class="form-control modal-input fa-font-set " placeholder="ایمیل">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="data[username]" id="username" value="" class="form-control modal-input fa-font-set " placeholder="کد امنیتی">
                                </div>
                                <button type="submit" class="btn button-upload fa-font-set">ثبت نام</button>
                            </div>
                            -->

                        </div>
                        <div class="col-xs-2"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>


<!--<script src="http://code.jquery.com/jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>-->




<!-- javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/jnaqsh-bootstrap-14a4bc1/docs/assets/js/jquery.js"></script>
<script src="/jnaqsh-bootstrap-14a4bc1/docs/assets/js/bootstrap-transition.js"></script>
<script src="/jnaqsh-bootstrap-14a4bc1/docs/assets/js/bootstrap-alert.js"></script>
<script src="/jnaqsh-bootstrap-14a4bc1/docs/assets/js/bootstrap-modal.js"></script>
<script src="/jnaqsh-bootstrap-14a4bc1/docs/assets/js/bootstrap-dropdown.js"></script>
<script src="/jnaqsh-bootstrap-14a4bc1/docs/assets/js/bootstrap-scrollspy.js"></script>
<script src="/jnaqsh-bootstrap-14a4bc1/docs/assets/js/bootstrap-tab.js"></script>
<script src="/jnaqsh-bootstrap-14a4bc1/docs/assets/js/bootstrap-tooltip.js"></script>
<script src="/jnaqsh-bootstrap-14a4bc1/docs/assets/js/bootstrap-popover.js"></script>
<script src="/jnaqsh-bootstrap-14a4bc1/docs/assets/js/bootstrap-button.js"></script>
<script src="/jnaqsh-bootstrap-14a4bc1/docs/assets/js/bootstrap-collapse.js"></script>
<script src="/jnaqsh-bootstrap-14a4bc1/docs/assets/js/bootstrap-carousel.js"></script>
<script src="/jnaqsh-bootstrap-14a4bc1/docs/assets/js/bootstrap-typeahead.js"></script>

<script type="text/javascript" src="/slick/slick.min.js"></script>
<script>
    $(document).ready(function(){
        $('.responsive').slick({
            rtl: true,
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });

    });
</script>

</body>
</html>