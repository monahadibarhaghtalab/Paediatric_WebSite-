@extends('layouts.app')


        <!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta http-equiv="content-language" content="fa"/>
        <meta name="keyword"   content="video, film, music, sound, vidofilm"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>دکتر نظام برحق طلب</title>

        <link href="content/logo.ico"  rel="shortcut icon"/>
        <link rel="stylesheet" href="style_profile.css" type="text/css" media="screen" charset="utf-8">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <link href='font.css' rel='stylesheet' type='text/css'>

        <script> 
            $(document).ready(function() {
                $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
                    e.preventDefault();
                    $(this).siblings('a.active').removeClass("active");
                    $(this).addClass("active");
                    var index = $(this).index();
                    $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
                    $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");

                    $(".list-group-item").css("border-left-color", "transparent");
                    $(".list-group-item").find('img').css("background-color", "#757575");
                    $(this).find('.bhoechie-icon').css("background-color", "#cf2229");
                });
            });

            $(document).ready(function() {

                $(".bhoechie-tab-content").css("height", $(".list-group-item").css("height"));

                $(".video-tab").parent("li.active").find("img").css("background-color", "#cf2229");
                $(".video-tab").click(function(e) {
                    $(".video-tab").find("img").css("background-color", "#757575");
                    $(this).find("img").css("background-color", "#cf2229");
                });

                $(".ic-close").click(function(e) {
                    $(this).parent().remove();
                });
            });
        </script>

    </head>

    <body>
        <div class="container-fluid" style="height: 100%;">
            <div class="page-wrap">
                <!--website header-->

                <!--content-->
                <div class="container-fluid profile-container">
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 bhoechie-tab-container">
                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3 col-rtl bhoechie-tab-menu">
                                <div class="list-group">
                                    <a href="#" class="list-group-item text-center">
                                        <img class="bhoechie-icon" src="content/img/ic_profile.svg"/>
                                    </a>
                                    <a href="#" class="list-group-item text-center">
                                        <img class="bhoechie-icon" src="content/img/ic_schedule.svg">
                                    </a>
                                    <a href="#" class="list-group-item text-center">
                                        <img class="bhoechie-icon" src="content/img/ic_qa.svg">
                                    </a>
                                    <a href="#" class="list-group-item text-center">
                                        <img class="bhoechie-icon" src="content/img/ic_gallery.svg">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9 bhoechie-tab">
                                <!-- profile section -->
                                <div class="bhoechie-tab-content">
                                    <div class="tab-box">
                                        <div class="row">
                                            <div class="profile-header-container">   
                                                <div class="profile-header-img">
                                                    <img class="img-circle" src="content/img/profile.jpg" />
                                                    <input type="file" class="upload"/>
                                                    <!-- badge -->
                                                    <div class="rank-label-container">
                                                        <span class="label label-default rank-label "><img src="content/img/edit.png"></span>
                                                    </div>
                                                </div>
                                                <div class="fa-font-set profile-phone-no" id="phone-number">دکتر نظام برحق طلب</div>
                                            </div> 
                                        </div>

                                        <center>
                                            <form class="form-horizontal" role="form">
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2 col-rtl fa-font-set">ایمیل</label>
                                                    <div class="col-sm-7 col-rtl">
                                                        <input type="email" class="form-control" id="Email" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2 col-rtl fa-font-set">نام </label>
                                                    <div class="col-sm-7 col-rtl">
                                                        <input type="text" class="form-control input-text" id="first-name" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2 col-rtl fa-font-set">نام خانوادگی</label>
                                                    <div class="col-sm-7 col-rtl">
                                                        <input type="text" class="form-control input-text" id="last-name" placeholder="">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-sm-2 col-rtl fa-font-set">رمز عبور کنونی</label>
                                                    <div class="col-sm-7 col-rtl">
                                                        <input type="password" class="form-control" id="pass" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2 col-rtl fa-font-set">رمز عبور جدید</label>
                                                    <div class="col-sm-7 col-rtl">
                                                        <input type="password" class="form-control" id="pass" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2 col-rtl fa-font-set">تکرار رمز عبور جدید</label>
                                                    <div class="col-sm-7 col-rtl">
                                                        <input type="password" class="form-control" id="pass" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div>
                                                        <button type="submit" class="btn btn-default fa-font-set red-btn">ذخیره</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </center>
                                    </div>
                                </div>
                                <!-- My Calendar -->
                                <div class="bhoechie-tab-content">
                                    <center>
                                        <ul class="nav nav-tabs ">
                                            <li><a class="video-tab" data-toggle="tab" href="#futur"><img class="tab-img" src="content/img/ic_futur.svg" title="پیش رو"></a></li>
                                            <li><a class="video-tab" data-toggle="tab" href="#history"><img class="tab-img" src="content/img/ic_history.svg" title="تاریخچه"></a></li>
                                        </ul>

                                        <div class="tab-content col-rtl">
                                            <div id="futur" class="tab-pane fade">
                                                <div class="tab-box">

                                                </div>
                                            </div>
                                            <div id="history" class="tab-pane fade">
                                                <div class="tab-box">

                                                </div>
                                            </div>
                                        </div>
                                    </center>
                                </div>

                                <!-- Question and Answer -->
                                <div class="bhoechie-tab-content">
                                    <center>
                                        <div class="tab-box">
                                            <div class="qa_manage">
                                                <div class="qa-caption-style">عنوان پرسش</div>
                                                <div class="qa-description-style">شرح سوال</div>


                                            </div>
                                        </div>
                                    </center>
                                </div>
                                <!-- Gallery -->
                                <div class="bhoechie-tab-content">
                                    <center>
                                        <div class="tab-box">
                                            <!--content-->
                                            <div class="row upload-container">
                                                <div class="col-xs-2"></div>
                                                <div class="col-xs-8">
                                                    <!-- Drop Zone -->
                                                    <div class="row">
                                                        <div class="upload-drop-zone fa-font-set" id="drop-zone">
                                                            <div class="row">
                                                                <div class="upload-drop-zone-btn btn btn-default space-bot fa-font-set">
                                                                    تصویر را از رایانه خود انتخاب کنید
                                                                    <input type="file" class="upload"/>
                                                                </div>
                                                            </div><div class="row">
                                                            یا بکشید و رها کنید!
                                                            </div>
                                                        </div>
                                                        <!-- Progress Bar -->
                                                        <div class="row space-top">
                                                            <div class="progress" >
                                                                <div class="progress-bar pb-color" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;" >
                                                                    <span class="sr-only">60%</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <center>
                                                            <form class="form-horizontal" role="form">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control input-text fa-font-set" id="first-name" placeholder="توضیحات">
                                                                </div>
                                                                <div class="form-group">
                                                                    <div>
                                                                        <button type="submit" class="btn btn-default fa-font-set red-btn">بارگذاری</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </center>
                                                    </div>
                                                </div>
                                                <div class="col-xs-2"></div>

                                            </div>
                                            <!-----all image in gallery------>
                                            <div class="col-xs-2"></div>
                                            <div class="col-xs-8">
                                                <div class="row">
                                                    <div class="col-xs-4">
                                                        <a href="#">
                                                            <div class="thumbnail pic-container around-shadow">
                                                                <img class="ic-close" src="content/img/remove.png">
                                                                <img src="content/gallery/Chrysanthemum.jpg" class="img-responsive pic-view" >
                                                                <div class="pic-caption fa-font-set">
                                                                    <span class="hideOverflow" >عنوان عنوان عنوان عنوان عنوان عنوان عنوان عنوان عنوان عنوان  </span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <a href="#">
                                                            <div class="thumbnail pic-container around-shadow">
                                                                <img class="ic-close" src="content/img/remove.png">
                                                                <img src="content/gallery/Chrysanthemum.jpg" class="img-responsive pic-view" >
                                                                <div class="pic-caption fa-font-set">
                                                                    <span class="hideOverflow" >عنوان عنوان عنوان عنوان عنوان عنوان عنوان عنوان عنوان عنوان  </span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <a href="#">
                                                            <div class="thumbnail pic-container around-shadow">
                                                                <img class="ic-close" src="content/img/remove.png">
                                                                <img src="content/gallery/Chrysanthemum.jpg" class="img-responsive pic-view" >
                                                                <div class="pic-caption fa-font-set">
                                                                    <span class="hideOverflow" >عنوان عنوان عنوان عنوان عنوان عنوان عنوان عنوان عنوان عنوان  </span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <a href="#">
                                                            <div class="thumbnail pic-container around-shadow">
                                                                <img class="ic-close" src="content/img/remove.png">
                                                                <img src="content/gallery/Chrysanthemum.jpg" class="img-responsive pic-view" >
                                                                <div class="pic-caption fa-font-set">
                                                                    <span class="hideOverflow" >عنوان عنوان عنوان عنوان عنوان عنوان عنوان عنوان عنوان عنوان  </span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <a href="#">
                                                            <div class="thumbnail pic-container around-shadow">
                                                                <img class="ic-close" src="content/img/remove.png">
                                                                <img src="content/gallery/Chrysanthemum.jpg" class="img-responsive pic-view" >
                                                                <div class="pic-caption fa-font-set">
                                                                    <span class="hideOverflow" >عنوان عنوان عنوان عنوان عنوان عنوان عنوان عنوان عنوان عنوان  </span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <a href="#">
                                                            <div class="thumbnail pic-container around-shadow">
                                                                <img class="ic-close" src="content/img/remove.png">
                                                                <img src="content/gallery/Chrysanthemum.jpg" class="img-responsive pic-view" >
                                                                <div class="pic-caption fa-font-set">
                                                                    <span class="hideOverflow" >عنوان عنوان عنوان عنوان عنوان عنوان عنوان عنوان عنوان عنوان  </span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>


                                                </div>
                                            </div>
                                            <div class="col-xs-2"></div>

                                        </div>
                                    </center>
                                </div>                                
                            </div>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                    </div>
                </div>

                <!--website footer-->           

            </div>
        </div>

        <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>