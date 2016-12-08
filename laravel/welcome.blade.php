<!---
entity used in this page images, linked_links, articles

url -> login

edit all needed entity

--->





@extends('layouts.app')

@section('content')

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





        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

        <!--<link rel="apple-touch-icon-precomposed" sizes="144x144" href="jnaqsh-bootstrap-14a4bc1/docs/assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="jnaqsh-bootstrap-14a4bc1/docs/assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="jnaqsh-bootstrap-14a4bc1/docs/assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="jnaqsh-bootstrap-14a4bc1/docs/assets/ico/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="jnaqsh-bootstrap-14a4bc1/docs/assets/ico/favicon.png">-->

        <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>

        <link href="style.css" rel="stylesheet">

        <link href='font.css' rel='stylesheet' type='text/css'>

        <style type="text/css">
            .item_box{
                height:500px;
            }

            .photo-thumb{
                width:100%;
                height:auto;
                float:left;
                border: thin solid #d1d1d1;
                margin:0 1em .5em 0;
                float:left;
            }
        </style>





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

    <body class="body-style home-body">
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
                <img class="logo-header" src="content/img/logo.jpg">
            </div>
        </div>








        <!--content-->
        <div class="container">
            <div class="row-fluid">
                <div class="span12">
                    <div class="bg-image">
                        <img class="img-responsive bg-image" src="content/img/home_bg.jpg">
                        <!--<img class="img-responsive bg-img-repeat" src="content/img/home_bg_repeat.jpg">-->
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-3 col-rtl">
                    <div class="links-container around-shadow fa-font-set">
                        <span style="font-size:1.3vw;">لینک های مرتبط</span>
                        <table class="fa-font-set">
                            @foreach ($linked_links as $link)
                                <li><a href={{'http://'.$link->url}} >{{$link->name}}</a></li>
                            @endforeach
                        </table>
                    </div>
                </div>
                <div class="col-xs-6 col-rtl">
                    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">

                            <div class="item">

                              @foreach ($images as $image)

                                    <img class="gallery-img" src={{$image->image_gallery_addr}} >
                                    <div class="carousel-caption">
                                        <h3 class="fa-font-set">{{$image->title}}</h3>
                                        <p class="fa-font-set">{{$image->text}}</p>
                                    </div>
                                @endforeach
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

                <!---- article ---->
                <div class="col-xs-3 col-rtl">
                    <div class="links-container around-shadow fa-font-set">
                        <span style="font-size:1.3vw;">عناوین مطالب آموزشی</span>
                        <table class="fa-font-set">

                            @foreach ($articles as $article)
                                <li><a href={{'/article/'.$article->article_id}} >{{$link->name}}</a></li>
                                @endforeach
=
                        </table>
                    </div>
                </div>
                <!---end article --->
            </div>


            <!---- article -->


            <!---insta -->

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



            <div class="row" style="margin-top: 70px; margin-bottom: 70px; max-width: 1000px; margin-left: auto; margin-right: auto;">
                <div class="responsive" data-slick='{"slidesToScroll": 1}'>


                    <div class="thumbnail around-shadow article-img">
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
                        echo "<img src='{$pic_src}' class='img-responsive' alt='{$pic_text}'>";
                       // echo "<img class='img-responsive photo-thumb' src='{$pic_src}' alt='{$pic_text}'>";
                        echo "</a>";
                        //echo "<p>";
                       // echo "<p>";
                        echo "<div style='color:#888;'>";
                        echo "<a href='{$pic_link}' target='_blank'>{$pic_created_time}</a>";
                        echo "</div>";
                        echo "</p>";
                        //echo "<p>{$pic_text}</p>";
                        echo "</p>";
                        echo "</div>";
                    }
                    ?>
                            <!-- Instagram feed will be here -->

                </div>
            </div>





<<!---
                            <div class="fa-font-set">
                                <span class="hideOverflow" >{{-- {{$article->title}} --}} </span>
                            </div>{
                            -->
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
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                            <div class="row">
                                <div class="col-xs-8">
                                    <div id="log-in-content">
                                        <div class="row" class="modal-row">

                                                {{ csrf_field() }}



                                                <div class="form-group">
                                                    <input type="text" name="username" id="username" value="" class="form-control modal-input fa-font-set " placeholder="ایمیل">
                                                </div>


                                                <div class="form-group">
                                                    <input type="password" name="password" id="password" value="" class="form-control modal-input fa-font-set" placeholder="رمز عبور">
                                                </div>


                                                <div class="form-group">
                                                    <div class="col-md-6 col-md-offset-4">
                                                        <div class="row" class="modal-row">
                                                        <button type="submit" class="btn btn-enter fa-font-set">ورود</button>
                                                        </div>
                                                    </div>
                                                </div>





                                        </div>

                                            <!---<div class="checkbox" style="float: right;">
                                                <label><input type="checkbox"><span class="fa-font-set">من را به خاطر بسپار</span></label>
                                            </div>--->



                                       <!---- if everybody can have profile
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
---->
                                </div>

                            </div>
                        </form>
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

        <script type="text/javascript" src="slick/slick.min.js"></script>
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
        <!--<script src="http://code.jquery.com/jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>-->
    </body>
</html>
@endsection