
@extends('layouts.theme')
@section('content')


        <!--content-->
<div class="container">
    <div class="edu-over">
        <img class="img-baby1 img-responsive" src="/content/img/baby1.png">
        <img class="img-book1 img-responsive" src="/content/img/book1.png">
        <img class="img-baby2 img-responsive" src="/content/img/baby2.png">
        <img class="img-book2 img-responsive" src="/content/img/book2.png">
        <div class="row" style="height:170px;"></div>


        <div class="edu-page">



                <div class="thumbnail">
                    <div class="caption fa-font-set">


                        <h3 class="text-center">{{$article->title}}</h3>
                        <img src={{'/'.$article->image_article_addr}} class="img-responsive" style="display: block;margin: auto;">

                        <br>
                        <p>
                            {{$article->body}}
                        </p>
                    </div>
                </div>





        <div class="row" style="height:100px;"></div>
    </div>
</div>
</div>
@endsection