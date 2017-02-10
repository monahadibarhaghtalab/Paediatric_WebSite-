
  @extends('layouts.theme')
  @section('content')
<!--content-->
<div class="container">
    <div class="edu-over">
        <img class="img-baby1 img-responsive" src="content/img/baby1.png">
        <img class="img-book1 img-responsive" src="content/img/book1.png">
        <img class="img-baby2 img-responsive" src="content/img/baby2.png">
        <img class="img-book2 img-responsive" src="content/img/book2.png">
        <div class="row" style="height:170px;"></div>

        <div class="row edu-page">
            @foreach($articles as $article)
            <div class="col-sm-6 col-rtl" href="#">
                <div class="edu-container around-shadow edu-col-rtl">
                    <a class="form-horizontal" href={{'/article/'.$article->article_id}} >
                        <div class="form-group">
                            <center>
                                <img class="img-thumbnail img-rounded" src={{$article->image_article_addr}} style="width:70%;height:70%;">
                            </center>
                            <div class="col-sm-12 col-rtl fa-font-set edu-caption hideOverflow">{{$article->title}}</div>
                            <div class="col-sm-12 col-rtl edu-text fa-font-set hideOverflow">
                                 {{$article->body}}
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach


        <div class="row" style="height:100px;"></div>
    </div>
</div>
    </div>



