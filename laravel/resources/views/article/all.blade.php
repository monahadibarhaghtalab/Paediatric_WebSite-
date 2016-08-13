@extends("layouts.app")

@section('content')

    <div class="row">

        @foreach($articles as $article)
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="caption">
                        <p>{{article->title}</p>
                        <p>
                            {{article->passage}}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
@endsection