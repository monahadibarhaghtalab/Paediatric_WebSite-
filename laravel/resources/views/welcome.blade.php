@extends('layouts.theme')

@section('content')
<!--content-->
<div class="container">
    <div class="row-fluid">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="bg-image intro">
                <img class="img-responsive bg-image" src="content/img/home_bg.jpg">
                <!--<img class="img-responsive bg-img-repeat" src="content/img/home_bg_repeat.jpg">-->
            </div>
        </div>
    </div>

    <div class="row" style="height: 400px;">
        <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12 col-rtl">
            <div class="links-container around-shadow fa-font-set" >
                <span>لینک های مرتبط</span>
                <table class="fa-font-set">
                    @foreach ($linked_links as $link)
                        <li><a href={{'http://'.$link->url}} >{{$link->title}}</a></li>
                    @endforeach
                </table>
            </div>
        </div>

        <!---slider --->
        <div class="col-lg-6 col-md-6 hidden-xs hidden-sm col-rtl">
            <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">


                    <?php $flag = 0; ?>
                    @foreach ($images as $image)




                    <div class="item {{ $flag == 0 ? 'active': '' }} ">


                            <img class="gallery-img" style="height: 400px; width: 640px;"   src={{$image->image_gallery_addr}}  >
                            <div class="carousel-caption">
                                <h3 class="fa-font-set">{{$image->title}}</h3>
                                <p class="fa-font-set">{{$image->text}}</p>
                            </div>

                    </div>

                            <?php $flag = $flag + 1; ?>
                        @endforeach
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

            <div class="col-sm-12 col-xs-12 hidden-md hidden-lg">
                <img src="content/img/zardi.jpg"/>
            </div>

        <!---- article ---->
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col-rtl">
            <div class="links-container around-shadow fa-font-set">
                <span>عناوین مطالب آموزشی</span>
                <table class="fa-font-set">

                    @foreach ($articles as $article)
                        <li><a href={{'/article/'.$article->article_id}} >{{$article->title}}</a></li>
                    @endforeach

                </table>
            </div>
        </div>
        <!---end article --->
    </div>



    <!---insta -->


    <!--    <h1>Display Instagram Feed On Website - LEVEL 1 - Live Demo</h1> -->
    <?php
    // use this instagram access token generator http://instagram.pixelunion.net/


    $access_token="2033081274.b89e2a3.023d311d6ff7418aafa8aedab850eff0";
    $photo_count=20;
    $json_link="https://api.instagram.com/v1/users/self/media/recent/?";
    $json_link.="access_token={$access_token}&count={$photo_count}";

    $json = file_get_contents($json_link);


    $obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);

    ?>






            <!-- Instagram feed will be here -->


    <div class="row instagram-row" style="height: 200px; margin-top: 70px; margin-bottom: 70px; max-width: 1000px; margin-left: auto; margin-right: auto; ">
        <div class="responsive" data-slick='{"slidesToScroll": 1}'>
<?php
            foreach ($obj['data'] as $post) {

                $pic_text=$post['caption']['text'];
                $pic_link=$post['link'];
                $pic_like_count=$post['likes']['count'];
                $pic_comment_count=$post['comments']['count'];
                $pic_src=str_replace("http://", "https://", $post['images']['standard_resolution']['url']);
                $pic_created_time=date("F j, Y", $post['caption']['created_time']);
                $pic_created_time=date("F j, Y", strtotime($pic_created_time . " +1 days"));

                echo "<a href='{$pic_link}' >";
                echo "<div class='thumbnail around-shadow instagram-img'>";
                //echo "<div class='col-md-4 col-sm-6 col-xs-12 item_box'>";

                echo "<img src='{$pic_src}' class='img-responsive' alt='{$pic_text}'>";
                echo "<div class='fa-font-set'>";
                echo "<span class='hideOverflow' >";
                echo substr($pic_text, 10);
                echo "</span>";
                echo  "</div>";
                echo  "</div>";
                //echo  "</div>";
                // echo "<img class='img-responsive photo-thumb' src='{$pic_src}' alt='{$pic_text}'>";
                echo "</a>";
                //echo "<p>";
                // echo "<p>";

            }
            ?>



</div>
        </div>

        </div>


@endsection