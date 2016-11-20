@extends("../layouts.app")

@section('content')

    <div class="row">

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="caption">
                        <p></p>
                        <p>{{$article->title}}</p>
                        <img src={{$article->image_article_addr}} class="img-responsive" >
                        <br>
                        <p>
                            {{$article->body}}
                        </p>
                    </div>
                </div>
            </div>


    </div>
@endsection