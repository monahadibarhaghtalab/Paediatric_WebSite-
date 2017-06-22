
  @extends('layouts.theme')
  @section('content')
<!--content-->
{{--<div class="container">--}}
    {{--<div class="row">--}}
    {{--<div class="edu-over">--}}
        {{--<div class="col-lg-3 col-md-3">--}}
        {{--<img class="img-book1 img-responsive" src="content/img/book1.png">--}}
        {{--<img class="img-baby1 img-responsive" src="content/img/baby1.png">--}}
        {{--</div>--}}




        {{--<div class="col-lg-3 col-md-3">--}}
        {{--<img class="img-book2 img-responsive" src="content/img/book2.png">--}}
        {{--<img class="img-baby2 img-responsive" src="content/img/baby2.png">--}}
        {{--</div>--}}
        {{--<div class="row" style="height:170px;"></div>--}}

       {{--<!-- <div class="row edu-page">-->--}}



        {{--<div class="row" style="height:100px;"></div>--}}
    {{--</div>--}}
{{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}


  <div class="container-fluid">
      <div class="row parent-article">
          <div class="col-lg-2 col-md-2 hidden-sm hidden-xs">
              <img class="img-book2 img-responsive" src="content/img/book2.png">
              <img class="img-baby2 img-responsive" src="content/img/baby2.png">
          </div>
          <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

              <?php $flag = 0; ?>
              @foreach($articles as $article)
                  @if($flag%2 == 0)
                      <?php
                      echo "<div class='row '>"
                      ?>
                  @endif

                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-rtl" href="#">
                      <div class="edu-container around-shadow edu-col-rtl">
                          <a class="form-horizontal" href={{'/article/'.$article->article_id}} >
                              <div class="form-group">
                                  <center>
                                      <img class="img-thumbnail img-rounded" src={{$article->image_article_addr}} style="width:70%;">
                                  </center>
                                  <div class="col-sm-12 col-rtl fa-font-set edu-caption hideOverflow">{{$article->title}}</div>
                                  <div class="col-sm-12 col-rtl edu-text fa-font-set hideOverflow">
                                      {{$article->body}}
                                  </div>
                              </div>
                          </a>
                      </div>
                  </div>
                  @if($flag%2 == 1)
                      <?php
                      echo "</div >"
                      ?>
                  @endif
                  <?php $flag = $flag + 1; ?>
              @endforeach
                  @if($flag%3 != 2)
                      <?php
                      echo "</div >"
                      ?>
                  @endif
          </div>

          <div class="col-lg-2 col-md-2 hidden-sm hidden-xs">
              <img class="img-book1 img-responsive" src="content/img/book1.png">
              <img class="img-baby1 img-responsive" src="content/img/baby1.png">
    </div>
</div>


</div>

  @endsection
