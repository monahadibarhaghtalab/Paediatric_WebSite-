

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

        <script  type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <link href='font.css' rel='stylesheet' type='text/css'>

    <!---    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script> -->
        <!--data picker-->
        <link type="text/css" href="jquery-datepicker/styles/jquery-ui-1.8.14.css" rel="stylesheet" />

        <script type="text/javascript" src="jquery-datepicker/scripts/jquery-1.6.2.min.js"></script>
        <script type="text/javascript" src="jquery-datepicker/scripts/jquery.ui.core.js"></script>
        <script type="text/javascript" src="jquery-datepicker/scripts/jquery.ui.datepicker-cc.js"></script>
        <script type="text/javascript" src="jquery-datepicker/scripts/calendar.js"></script>
        <script type="text/javascript" src="jquery-datepicker/scripts/jquery.ui.datepicker-cc-ar.js"></script>
        <script type="text/javascript" src="jquery-datepicker/scripts/jquery.ui.datepicker-cc-fa.js"></script>







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

//                $(".ic-close").click(function(e) {
//                    $(this).parent().parent().remove();
//                });
            });
        </script>

        <script type="text/javascript">
            $(function() {

                $("#datepicker2").datepicker({
                    dateFormat: 'dd/mm/yy',
                    altField: '#alternate2',
                    altFormat: 'DD، d MM yy'
                });
            });
        </script>



        <script type="text/javascript">
            $(function() {

                $('#datepicker').datepicker({

                    changeMonth: true,
                    changeYear: true
                });
            });
        </script>








    </head>

    <body>
        <div class="container-fluid" style="height: 100%;">
            <!--- class message --->
            <div class="flash-message" align="center">
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                    @if(Session::has('alert-' . $msg))

                        <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                    @endif
                @endforeach
            </div> <!-- end .flash-message -->


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
                                    <a href="#" class="list-group-item text-center">
                                        <img class="bhoechie-icon" src="content/img/ic_links.svg">
                                    </a>
                                    <a href="#" class="list-group-item text-center">
                                        <img class="bhoechie-icon" src="content/img/ic_edu.svg">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9 bhoechie-tab">
                                <!-- profile section -->
                                <div class="bhoechie-tab-content active">
                                    <div class="tab-box">
                                        <div class="row">
                                            <div class="profile-header-container">   
                                                <div class="profile-header-img">
                                                    <img class="img-circle" src="content/img/profile.jpg" />
                                                  <!--  <form method="POST" action="/changePhoto"/>
                                                    <input type="file" class="upload"/>
                                                    <!-- badge -->
                                                 <!--   <div class="rank-label-container">
                                                        <span class="label label-default rank-label "><img src="content/img/edit.png"></span>
                                                    </div>
                                                    </form>
                                                    --->
                                                </div>
                                                <div class="fa-font-set profile-phone-no" id="phone-number">دکتر نظام برحق طلب<span>     </span><a href="/logout"><img src="content/img/logout.png" width="20px" title="خروج"></a> </div>
                                            </div> 
                                        </div>

                                        <center>
                                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/user/editInfo') }}">
                                                {{csrf_field()}}
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2 col-rtl fa-font-set">ایمیل</label>
                                                    <div class="col-sm-7 col-rtl">
                                                        <input type="email" class="form-control" id="email" name ="email" placeholder="">
                                                    </div>
                                                </div>
                                                <!---
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2 col-rtl fa-font-set">نام </label>
                                                    <div class="col-sm-7 col-rtl">
                                                        <input type="text" class="form-control input-text" id="first-name" name ="first-name" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2 col-rtl fa-font-set">نام خانوادگی</label>
                                                    <div class="col-sm-7 col-rtl">
                                                        <input type="text" class="form-control input-text" id="last-name" name = "last-name" placeholder="">
                                                    </div>
                                                </div>
                                                ----->
                                                <div class="form-group">
                                                    <div>
                                                        <button id="btn_first" type="submit"  style="margin-bottom:20px;" class="btn btn-default fa-font-set red-btn">ذخیره</button>
                                                    </div>
                                                </div>
                                            </form>
                                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/user/editPass') }}">
                                                {{csrf_field()}}
                                                <!---
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2 col-rtl fa-font-set">رمز عبور کنونی</label>
                                                    <div class="col-sm-7 col-rtl">
                                                        <input type="password" class="form-control" id="pass" placeholder="">
                                                    </div>
                                                </div>
                                                --->
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2 col-rtl fa-font-set">رمز عبور جدید</label>
                                                    <div class="col-sm-7 col-rtl">
                                                        <input type="password" class="form-control" id="pass" name = "pass" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2 col-rtl fa-font-set">تکرار رمز عبور جدید</label>
                                                    <div class="col-sm-7 col-rtl">
                                                        <input type="password" class="form-control" id="pass" name = "repeat_pass" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div>
                                                        <button type="submit" class="btn btn-default fa-font-set red-btn">ذخیره</button>
                                                    </div>
                                                </div>
                                                </form >
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

                                        <div class="tab-content">
                                            <div id="futur" class="tab-pane fade">
                                                <div class="tab-box">
                                                    <div class="qa_manage around-shadow">
                                                        <div class="row">
                                                            <img class="ic-close" src="content/img/remove.png"/>
                                                        </div>
                                                        <form class="form-horizontal" role="form">
                                                            <div class="form-group feedback-position">
                                                                <label class="control-label col-sm-2 col-lg-2 col-rtl fa-font-set">نام و نام خانوادگی</label>
                                                                <div class="col-sm-10 col-lg-10 col-rtl">
                                                                    <div class="fa-font-set input-text">
                                                                        سه شنبه 12 مهرماه 1395 - ساعت 14 الی 15
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>

                                                    <div class="qa_manage around-shadow">
                                                        <div class="row">
                                                            <img class="ic-close" src="content/img/remove.png"/>
                                                        </div>
                                                        <form class="form-horizontal" role="form">
                                                            <div class="form-group feedback-position">
                                                                <label class="control-label col-sm-2 col-lg-2 col-rtl fa-font-set">نام و نام خانوادگی</label>
                                                                <div class="col-sm-10 col-lg-10 col-rtl">
                                                                    <div class="fa-font-set input-text">
                                                                        سه شنبه 12 مهرماه 1395 - ساعت 14 الی 15
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>

                                                    <div class="qa_manage around-shadow">
                                                        <div class="row">
                                                            <img class="ic-close" src="content/img/remove.png"/>
                                                        </div>
                                                        <form class="form-horizontal" role="form">
                                                            <div class="form-group feedback-position">
                                                                <label class="control-label col-sm-2 col-lg-2 col-rtl fa-font-set">نام و نام خانوادگی</label>
                                                                <div class="col-sm-10 col-lg-10 col-rtl">
                                                                    <div class="fa-font-set input-text">
                                                                        سه شنبه 12 مهرماه 1395 - ساعت 14 الی 15
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>

                                                    <div class="qa_manage around-shadow">
                                                        <div class="row">
                                                            <img class="ic-close" src="content/img/remove.png"/>
                                                        </div>
                                                        <form class="form-horizontal" role="form">
                                                            <div class="form-group feedback-position">
                                                                <label class="control-label col-sm-2 col-lg-2 col-rtl fa-font-set">نام و نام خانوادگی</label>
                                                                <div class="col-sm-10 col-lg-10 col-rtl">
                                                                    <div class="fa-font-set input-text">
                                                                        سه شنبه 12 مهرماه 1395 - ساعت 14 الی 15
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>

                                                    <div class="qa_manage around-shadow">
                                                        <div class="row">
                                                            <img class="ic-close" src="content/img/remove.png"/>
                                                        </div>
                                                        <form class="form-horizontal" role="form">
                                                            <div class="form-group feedback-position">
                                                                <label class="control-label col-sm-2 col-lg-2 col-rtl fa-font-set">نام و نام خانوادگی</label>
                                                                <div class="col-sm-10 col-lg-10 col-rtl">
                                                                    <div class="fa-font-set input-text">
                                                                        سه شنبه 12 مهرماه 1395 - ساعت 14 الی 15
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>

                                                    <div class="qa_manage around-shadow">
                                                        <div class="row">
                                                            <img class="ic-close" src="content/img/remove.png"/>
                                                        </div>
                                                        <form class="form-horizontal" role="form">
                                                            <div class="form-group feedback-position">
                                                                <label class="control-label col-sm-2 col-lg-2 col-rtl fa-font-set">نام و نام خانوادگی</label>
                                                                <div class="col-sm-10 col-lg-10 col-rtl">
                                                                    <div class="fa-font-set input-text">
                                                                        سه شنبه 12 مهرماه 1395 - ساعت 14 الی 15
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>

                                                    <div class="qa_manage around-shadow">
                                                        <div class="row">
                                                            <img class="ic-close" src="content/img/remove.png"/>
                                                        </div>
                                                        <form class="form-horizontal" role="form">
                                                            <div class="form-group feedback-position">
                                                                <label class="control-label col-sm-2 col-lg-2 col-rtl fa-font-set">نام و نام خانوادگی</label>
                                                                <div class="col-sm-10 col-lg-10 col-rtl">
                                                                    <div class="fa-font-set input-text">
                                                                        سه شنبه 12 مهرماه 1395 - ساعت 14 الی 15
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>

                                                    <div class="qa_manage around-shadow">
                                                        <div class="row">
                                                            <img class="ic-close" src="content/img/remove.png"/>
                                                        </div>
                                                        <form class="form-horizontal" role="form">
                                                            <div class="form-group feedback-position">
                                                                <label class="control-label col-sm-2 col-lg-2 col-rtl fa-font-set">نام و نام خانوادگی</label>
                                                                <div class="col-sm-10 col-lg-10 col-rtl">
                                                                    <div class="fa-font-set input-text">
                                                                        سه شنبه 12 مهرماه 1395 - ساعت 14 الی 15
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>

                                                    <div class="qa_manage around-shadow">
                                                        <div class="row">
                                                            <img class="ic-close" src="content/img/remove.png"/>
                                                        </div>
                                                        <form class="form-horizontal" role="form">
                                                            <div class="form-group feedback-position">
                                                                <label class="control-label col-sm-2 col-lg-2 col-rtl fa-font-set">نام و نام خانوادگی</label>
                                                                <div class="col-sm-10 col-lg-10 col-rtl">
                                                                    <div class="fa-font-set input-text">
                                                                        سه شنبه 12 مهرماه 1395 - ساعت 14 الی 15
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>

                                                    <div class="qa_manage around-shadow">
                                                        <div class="row">
                                                            <img class="ic-close" src="content/img/remove.png"/>
                                                        </div>
                                                        <form class="form-horizontal" role="form">
                                                            <div class="form-group feedback-position">
                                                                <label class="control-label col-sm-2 col-lg-2 col-rtl fa-font-set">نام و نام خانوادگی</label>
                                                                <div class="col-sm-10 col-lg-10 col-rtl">
                                                                    <div class="fa-font-set input-text">
                                                                        سه شنبه 12 مهرماه 1395 - ساعت 14 الی 15
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>

                                                    <div class="qa_manage around-shadow">
                                                        <div class="row">
                                                            <img class="ic-close" src="content/img/remove.png"/>
                                                        </div>
                                                        <form class="form-horizontal" role="form">
                                                            <div class="form-group feedback-position">
                                                                <label class="control-label col-sm-2 col-lg-2 col-rtl fa-font-set">نام و نام خانوادگی</label>
                                                                <div class="col-sm-10 col-lg-10 col-rtl">
                                                                    <div class="fa-font-set input-text">
                                                                        سه شنبه 12 مهرماه 1395 - ساعت 14 الی 15
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                            <div id="history" class="tab-pane fade">
                                                <div class="tab-box">
                                                    <div class="qa_manage around-shadow">
                                                        <div class="row">
                                                            <img class="ic-close" src="content/img/remove.png"/>
                                                        </div>
                                                        <form class="form-horizontal" role="form">
                                                            <div class="form-group feedback-position">
                                                                <label class="control-label col-sm-2 col-lg-2 col-rtl fa-font-set">نام و نام خانوادگی</label>
                                                                <div class="col-sm-10 col-lg-10 col-rtl">
                                                                    <div class="fa-font-set input-text">
                                                                        سه شنبه 12 مهرماه 1395 - ساعت 14 الی 15
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>

                                                    <div class="qa_manage around-shadow">
                                                        <div class="row">
                                                            <img class="ic-close" src="content/img/remove.png"/>
                                                        </div>
                                                        <form class="form-horizontal" role="form">
                                                            <div class="form-group feedback-position">
                                                                <label class="control-label col-sm-2 col-lg-2 col-rtl fa-font-set">نام و نام خانوادگی</label>
                                                                <div class="col-sm-10 col-lg-10 col-rtl">
                                                                    <div class="fa-font-set input-text">
                                                                        سه شنبه 12 مهرماه 1395 - ساعت 14 الی 15
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </center>
                                </div>

                                <!-- Question and Answer -->
                                <div class="bhoechie-tab-content">
                                    <div>
                                        <div class="row">
                                            <div class="col-xs-8 col-rtl">
                                                <p class="fa-font-set col-rtl">
                                                    <input type="text" id="datepicker" class="hasDatepicker" value="af"/>



                                                    <input type="text" id="datepicker2" />
                                                    تاریخ
                                                </p>

                                            </div>






                                            <div class="col-xs-4 col-rtl">
                                                <div class="checkbox col-rtl" style="margin-top: 0px !important;margin-bottom: 0px;!important">
                                                    <label class="fa-font-set"><input type="checkbox" value="">نمایش پرسش های بی پاسخ</label>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="tab-box" style="height:660px !important;">
                                            <div class="qa_manage around-shadow">
                                        @foreach ($questions as $question)
                                            <a href={{"/admin/removeQuestion/".$question->question_id }}>
                                                <div class="row">
                                                    <img class="ic-close" src="content/img/remove.png"/>
                                                </div>
                                            </a>
                                            <form class="form-horizontal" role="form">
                                                <div class="form-group feedback-position">
                                                    <label class="control-label col-sm-2 col-rtl fa-font-set">پرسش</label>
                                                    <div class="col-sm-10 col-rtl">
                                                        <div class="fa-font-set input-text">
                                                        {{$question->text}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group feedback-position">
                                                    <label class="control-label col-sm-2 col-rtl fa-font-set">پاسخ</label>
                                                    <div class="comment-container col-sm-10 col-rtl">
                                                        <textarea class="form-control input-text" rows="2" id="comment">{{$question->answer}}</textarea>
                                                    </div>
                                                </div>
                                            </form>
                                        @endforeach
                                                </div>
                                            </div>



                                        </div>
                                    </div>

                                <!-- Gallery -->
                                <div class="bhoechie-tab-content">
                                    <center>
                                        <div class="tab-box" style="height:700px !important;">
                                            <!--content-->

                                            <div class="row upload-container">
                                                <div class="col-xs-2"></div>

                                                <div class="col-xs-8">

                                                    <!-- Drop Zone -->
                                                    <div class="row">

                                                        <form class="form-horizontal" role="form" method="POST" action="/admin/uploadImage" enctype="multipart/form-data">

                                                            {{csrf_field()}}
                                                        <div class="upload-drop-zone fa-font-set" id="drop-zone">
                                                            <div class="row">
                                                                <div class="upload-drop-zone-btn btn btn-default space-bot fa-font-set">
                                                                    تصویر را از رایانه خود انتخاب کنید
                                                                    <input type="file" name="image"  class="upload"/>
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

                                                                <div class="form-group">
                                                                    <input type="text" class="form-control input-text fa-font-set" id="title" name="title" placeholder="عنوان">
                                                                    <input type="text" class="form-control input-text fa-font-set" id="caption" name="caption" placeholder="توضیحات">
                                                                </div>
                                                                <div class="form-group">
                                                                    <div>
                                                                        <button type="submit" class="btn btn-default fa-font-set red-btn">بارگذاری</button>
                                                                    </div>
                                                                </div>

                                                        </center>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="col-xs-2"></div>

                                            </div>
                                            <!-----all image in gallery------>
                                            <div class="col-xs-2"></div>
                                            <div class="col-xs-8">
                                                <div class="row">
                                                    @foreach ($images as $image)
                                                    <div class="col-xs-4">
                                                        <a href={{"/admin/removeImage/".$image->image_id }}>
                                                            <div class="thumbnail pic-container around-shadow">
                                                                <div class="row">
                                                                    <img class="ic-close" src="content/img/remove.png"/>
                                                                </div>
                                                                <img src="{{$image->image_gallery_addr}}" class="img-responsive pic-view" >
                                                                <div class="pic-caption fa-font-set">
                                                                    <span class="hideOverflow" >{{$image->title}}  </span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    @endforeach



                                                </div>
                                            </div>
                                            <div class="col-xs-2"></div>

                                        </div>
                                    </center>
                                </div> 
                                <!-- links -->
                                <div class="bhoechie-tab-content">
                                    <div>
                                        <div class="tab-box" style="height:700px !important;">
                                            <div class="qa_manage around-shadow">
                                                <form class="form-horizontal" role="form" method="POST" action="/admin/uploadLink">
                                                    {{csrf_field()}}
                                                    <div class="form-group feedback-position">
                                                        <label class="control-label col-sm-2 col-rtl fa-font-set">عنوان</label>
                                                        <div class="comment-container col-sm-10 col-rtl">
                                                            <textarea class="form-control input-text" rows="1" id="comment" name="title"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group feedback-position">
                                                        <label class="control-label col-sm-2 col-rtl fa-font-set">لینک</label>
                                                        <div class="comment-container col-sm-10 col-rtl">
                                                            <textarea class="form-control input-text" rows="2" id="comment" name="url"></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <center>
                                                            <button type="submit"  style="margin-bottom:20px;" class="btn btn-default fa-font-set red-btn">ذخیره</button>
                                                        </center>
                                                    </div>
                                                </form>
                                            </div>
                                            @foreach ($linked_links as $link)
                                            <div class="qa_manage around-shadow">
                                                <a href={{"/admin/removeLink/".$link->link_id }}>
                                                <div class="row">
                                                    <img class="ic-close" src="content/img/remove.png"/>
                                                </div>
                                                    </a>
                                                <form class="form-horizontal" role="form">
                                                    <div class="form-group feedback-position">
                                                        <div class="control-label col-sm-2 col-rtl fa-font-set">عنوان

                                                            :
                                                        {{$link->title}}
                                                        </div>
                                                        <div class="col-sm-10 col-rtl">

                                                            <div class="fa-font-set input-text">


                                                                لینک
:
                                                               <a href={{"http://". $link->url}}>{{$link->url}}</a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            @endforeach



                                        </div>
                                    </div>

                                </div> 

                                <!-- Edu -->

                                <div class="bhoechie-tab-content">
                                    <div>
                                        <div class="tab-box" style="height:700px !important;">
                                            <div class="qa_manage around-shadow">
                                                <form class="form-horizontal" role="form" method="POST" action="/admin/uploadArticle" enctype="multipart/form-data">
                                                    {{csrf_field()}}
                                                    <div class="form-group feedback-position">
                                                        <label class="control-label col-sm-2 col-rtl fa-font-set">عنوان</label>
                                                        <div class="comment-container col-sm-10 col-rtl">
                                                            <textarea class="form-control input-text" rows="1" id="comment" name="title-article"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group feedback-position">
                                                        <label class="control-label col-sm-2 col-rtl fa-font-set">توضیحات</label>
                                                        <div class="comment-container col-sm-10 col-rtl">
                                                            <textarea class="form-control input-text" rows="5" id="comment" name="body-article"></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="row upload-container" style="margin-bottom:0px !important; height: 150px !important;">
                                                        <div class="col-xs-2"></div>
                                                        <div class="col-xs-8">
                                                            <!-- Drop Zone -->
                                                            <div class="row">
                                                                <div class="upload-drop-zone fa-font-set" id="drop-zone">
                                                                    <div class="row">
                                                                        <div class="upload-drop-zone-btn btn btn-default space-bot fa-font-set">
                                                                            تصویر را از رایانه خود انتخاب کنید
                                                                            <input type="file" class="upload" name="image-article"/>
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
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-2"></div>

                                                    </div>

                                                    <div class="form-group">
                                                        <center>
                                                            <button type="submit"  style="margin-bottom:20px;" class="btn btn-default fa-font-set red-btn">ذخیره</button>
                                                        </center>
                                                    </div>
                                                </form>
                                            </div>


                                            <div class="qa_manage around-shadow">
                                                @foreach ($articles as $article)
                                                    <a href={{"/admin/removeArticle/".$article->article_id }}>
                                                    <div class="row">
                                                    <img class="ic-close" src="content/img/remove.png"/>
                                                </div>
                                                        </a>
                                                <form class="form-horizontal" role="form">
                                                    <div class="form-group">
                                                        <center>
                                                            <img class="img-thumbnail img-rounded" src="{{$article->image_article_addr}}" style="width: 50%;">
                                                        </center>
                                                        <div class="control-label col-sm-12 col-rtl fa-font-set edu-caption">عنوان
                                                       : {{$article->title}}
                                                        </div>
                                                        <div class="col-sm-12 col-rtl edu-text">
                                                            <div class="fa-font-set input-text">
                                                                توضیحات
                                                            :
                                                                {{$article->body}}
                                                            </div>

                                                        </div>
                                                    </div>
                                                </form>
                                                    @endforeach
                                            </div>


                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!--website footer-->           

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

        <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>


        <!---- Ajax ---------->


        <script>

                $("#btn_first").click(function () {
//                    alert("hi");
//                    $.post('http://lara.dev/ajax', {
//                                param1: $("#email"),
//                                param2: $("#first-name"),
//                                param3: $("#last-name")
//                            },
//                            function (data) {
//                                alert(data.field1 + ' ' + data.field2);
//                            }, 'json');
                });


        </script>





    </body>
</html>
